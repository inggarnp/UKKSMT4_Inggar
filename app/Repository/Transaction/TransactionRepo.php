<?php

namespace App\Repository\Transaction;

use App\Contracts\Transaction\TransactionInterfacae;
use App\Contracts\Transaction\TransactionInterface;
use App\Models\Product;
use App\Models\Student;
use App\Models\Transaction;

class TransactionRepo implements TransactionInterface
{
    public function order(array $attributes)
    {
        $student = auth()->user()->userReference->reference;
        if (isset($student)) {
            if ($student instanceof Student) {
                if ($student->saldo->saldo > 0) {
                    if (isset($attributes['product_id'])) {
                        $product = Product::find($attributes['product_id']);
                        if ($student->saldo->saldo > $product->price) {
                            $transaction = Transaction::create([
                                "debt" => $attributes['paid'] - $product->price,
                                'paid' => $attributes['paid'],
                                "product_id" => $attributes['product_id'],
                                "student_id" => $student->getKey(),
                            ]);

                            $student->saldo->saldo -= $product->price;
                            $student->saldo->save();
                        } else {
                            dd("saldo tidak mencukupi");
                        }
                    } else {
                        dd("product belum ada yg di pilih");
                    }
                } else {
                    dd("saldo siswa kurang dari 0");
                }
            } else {
                dd("yg wajib order harus siswa");
            }
        }
        return $student;
    }

    public function index(array $attributes) {
        $attributes ??= request()->all();
        return Transaction::with("student", "product");
    }
}
