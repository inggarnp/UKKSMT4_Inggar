@extends('layout.app_dashboard')
@section('content')
<!-- ==================================================== -->
<!-- Start right Content here -->
<!-- ==================================================== -->
<div class="page-content">

    <!-- Start Container Fluid -->
    <div class="container">

        <div class="row">
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-1 anchor" id="browser-defaults">
                            Browser Default<a class="anchor-link" href="#default">#</a>
                        </h5>
                        <p class="text-muted">Depending on your browser and OS, you’ll see a slightly different style of feedback.</p>
                        <div class="mb-3">
                            <form class="row g-3">
                                <div class="col-md-4">
                                    <label for="validationDefault01" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefault02" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationDefaultUsername" class="form-label">Username</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationDefault03" class="form-label">City</label>
                                    <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationDefault04" class="form-label">State</label>
                                    <select class="form-select" id="validationDefault04" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationDefault05" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="validationDefault05" required>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Agree to terms and conditions
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Submit form</button>
                                </div>
                            </form>
                        </div>

                        <div class="highlight">
                            <div class="highlight-toolbar">
                                <small class="text-uppercase">html</small>
                                <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                            </div>
                            <div class="code">
                                <pre class="language-html">
                                    <code id="buttonBadge">
                                        &lt;form class=&quot;row g-3&quot;&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                &lt;label for=&quot;validationDefault01&quot; class=&quot;form-label&quot;&gt;First name&lt;/label&gt;
                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault01&quot; value=&quot;Mark&quot; required&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                &lt;label for=&quot;validationDefault02&quot; class=&quot;form-label&quot;&gt;Last name&lt;/label&gt;
                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault02&quot; value=&quot;Otto&quot; required&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                &lt;label for=&quot;validationDefaultUsername&quot; class=&quot;form-label&quot;&gt;Username&lt;/label&gt;
                                                &lt;div class=&quot;input-group&quot;&gt;
                                                    &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroupPrepend2&quot;&gt;@&lt;/span&gt;
                                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefaultUsername&quot; aria-describedby=&quot;inputGroupPrepend2&quot; required&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-md-6&quot;&gt;
                                                &lt;label for=&quot;validationDefault03&quot; class=&quot;form-label&quot;&gt;City&lt;/label&gt;
                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault03&quot; required&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-md-3&quot;&gt;
                                                &lt;label for=&quot;validationDefault04&quot; class=&quot;form-label&quot;&gt;State&lt;/label&gt;
                                                &lt;select class=&quot;form-select&quot; id=&quot;validationDefault04&quot; required&gt;
                                                    &lt;option selected disabled value=&quot;&quot;&gt;Choose...&lt;/option&gt;
                                                    &lt;option&gt;...&lt;/option&gt;
                                                &lt;/select&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-md-3&quot;&gt;
                                                &lt;label for=&quot;validationDefault05&quot; class=&quot;form-label&quot;&gt;Zip&lt;/label&gt;
                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault05&quot; required&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-12&quot;&gt;
                                                &lt;div class=&quot;form-check&quot;&gt;
                                                    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;invalidCheck2&quot; required&gt;
                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;invalidCheck2&quot;&gt;
                                                        Agree to terms and conditions
                                                    &lt;/label&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-12&quot;&gt;
                                                &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
                                            &lt;/div&gt;
                                        &lt;/form&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-xl-3">
                <div class="card docs-nav">
                    <ul class="nav bg-transparent flex-column">
                        <li class="nav-item">
                            <a href="#browser-defaults" class="nav-link">Browser Defaults</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- end row -->
    </div>
    <!-- End Container Fluid -->

    <!-- ========== Footer Start ========== -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy; Larkon. Crafted by <iconify-icon icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon> <a
                        href="https://1.envato.market/techzaa" class="fw-bold footer-text" target="_blank">Techzaa</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ========== Footer End ========== -->

</div>

<!-- ==================================================== -->
<!-- End Page Content -->
<!-- ==================================================== -->
@endsection