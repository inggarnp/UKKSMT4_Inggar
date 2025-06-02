         <!-- js login admin -->

         <!-- Theme Config js (Require in all Page) -->
         <script src="{{ asset('assetsa/js/config.js') }}"></script>

         <!-- Vendor Javascript (Require in all Page) -->
         <script src="{{ asset('assetsa/js/vendor.js') }}"></script>

         <!-- App Javascript (Require in all Page) -->
         <script src="{{ asset('assetsa/js/app.js') }}"></script>

         <!-- Theme Config js (Require in all Page) -->
         <script src="{{ asset('assetsa/js/config.js') }}"></script>

         <!-- Vendor Javascript (Require in all Page) -->
         <script src="{{ asset('assetsa/js/vendor.js') }}"></script>

         <!-- App Javascript (Require in all Page) -->
         <script src="{{ asset('assetsa/js/app.js') }}"></script>

         <!-- Vector Map Js -->
         <script src="{{ asset('assetsa/vendor/jsvectormap/js/jsvectormap.min.js') }}"></script>
         <script src="{{ asset('assetsa/vendor/jsvectormap/maps/world-merc.js') }}"></script>
         <script src="{{ asset('assetsa/vendor/jsvectormap/maps/world.js') }}"></script>

         <!-- Dashboard Js -->
         <script src="{{ asset('assetsa/js/pages/dashboard.js') }}"></script>

         <!-- Tambah CDN Grid.js -->
         <link href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css" rel="stylesheet" />
         <script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>

         <!-- Script Grid.js -->
         <script>
              document.addEventListener("DOMContentLoaded", function() {
                   if (document.getElementById("table-gridjs")) {
                        new gridjs.Grid({
                             columns: [{
                                       name: 'ID',
                                       formatter: cell => gridjs.html(`<span class="fw-semibold">${cell}</span>`)
                                  },
                                  "Name",
                                  {
                                       name: 'Email',
                                       formatter: cell => gridjs.html(`<a href="#">${cell}</a>`)
                                  },
                                  "Position", "Company", "Country",
                                  {
                                       name: 'Actions',
                                       width: '120px',
                                       formatter: cell => gridjs.html(`<a href='#' class='text-reset text-decoration-underline'>Details</a>`)
                                  },
                             ],
                             pagination: {
                                  limit: 5
                             },
                             sort: true,
                             search: true,
                             data: [
                                  ["11", "Alice", "alice@example.com", "Software Engineer", "ABC Company", "United States"],
                                  ["12", "Bob", "bob@example.com", "Product Manager", "XYZ Inc", "Canada"],
                                  ["13", "Charlie", "charlie@example.com", "Data Analyst", "123 Corp", "Australia"],
                                  ["14", "David", "david@example.com", "UI/UX Designer", "456 Ltd", "United Kingdom"],
                                  ["15", "Eve", "eve@example.com", "Marketing Specialist", "789 Enterprises", "France"],
                                  ["16", "Frank", "frank@example.com", "HR Manager", "ABC Company", "Germany"],
                                  ["17", "Grace", "grace@example.com", "Financial Analyst", "XYZ Inc", "Japan"],
                                  ["18", "Hannah", "hannah@example.com", "Sales Representative", "123 Corp", "Brazil"],
                                  ["19", "Ian", "ian@example.com", "Software Developer", "456 Ltd", "India"],
                                  ["20", "Jane", "jane@example.com", "Operations Manager", "789 Enterprises", "China"]
                             ]
                        }).render(document.getElementById("table-gridjs"));
                   }
              });
         </script>