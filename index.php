<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Vin Diesel Trucking</title>
  <link rel="stylesheet" href="homepage.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
  <link rel="icon" href="../Saf_edits/images/depositphotos_331503262-stock-illustration-no-image-vector-symbol-missing.jpg" type="image/x-icon" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />
</head>

<body class="d-flex flex-column min-vh-100">
  <h1 class="sr-only">Vin Diesel Trucking</h1>

  <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light shadow-sm">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="../Saf_edits/images/depositphotos_331503262-stock-illustration-no-image-vector-symbol-missing.jpg" alt="Vin Diesel Trucking Logo" class="logo-img mr-2" style="height:40px; width:auto; border-radius:10%;" />
      <span class="font-weight-bold">Vin Diesel Trucking</span>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="form-inline my-2 my-lg-0 ml-auto align-items-center" id="searchForm" role="search" style="max-width: 600px;">
        <input
          class="form-control mr-2"
          type="search"
          placeholder="Search trailers by VIN"
          aria-label="Search"
          id="vinInput"
          style="min-width: 180px; max-width: 300px;"
        />

        <select
          class="form-control mr-2 d-none"
          id="sortBy"
          aria-label="Sort trailers"
          style="min-width: 140px;"
        >
          <option value="date_desc">Newest First</option>
          <option value="date_asc">Oldest First</option>
          <option value="mileage_asc">Mileage Low to High</option>
          <option value="mileage_desc">Mileage High to Low</option>
        </select>

        <button class="btn btn-success" type="submit" style="white-space: nowrap;">
          Search
        </button>
      </form>
    </div>
  </nav>

  <div id="results" class="container mt-4"></div> <!-- Placeholder for search results -->

  <main class="container mt-5 flex-grow-1">
    <section class="intro mb-5 text-center">
      <p class="welcome-text lead">
        Welcome to <strong>Vin Diesel Trucking</strong> — the <em>CARFAX for trailers</em>.<br />
        Get your trailer VINs, repair records, and more — all in one place.
      </p>
    </section>

    <section class="container-base p-4 bg-white rounded shadow-sm mx-auto" style="max-width:720px;">
      <h2 class="mb-3">How it works</h2>
      <p>
        Search trailers by VIN or browse from a curated list. View detailed reports, download CSV files, and keep your
        fleet running smoother than a turbo diesel on race day.
      </p>
    </section>
  </main>

  <div class="modal fade" id="onboardingModal" tabindex="-1" role="dialog" aria-labelledby="onboardingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="onboardingModalLabel">Welcome to Vin Diesel Trucking!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Close Onboarding">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Use the search box above to find detailed trailer reports quickly.</p>
          <p>Filter and sort results to narrow your search.</p>
          <p>Check out our FAQ page for common questions.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Got it!</button>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-light text-center py-4 mt-auto shadow-sm">
    <a href="#" class="d-inline-flex align-items-center mb-3 text-decoration-none text-dark">
      <img src="../Saf_edits/images/depositphotos_331503262-stock-illustration-no-image-vector-symbol-missing.jpg" alt="Footer Logo" style="height: 40px; width: auto; border-radius: 10%; margin-right: 8px;" />
      <span class="font-weight-bold">Vin Diesel Trucking</span>
    </a>
    <nav class="mb-3">
      <a href="faq.html" class="text-muted mx-2">FAQ</a>
      <a href="contact.html" class="text-muted mx-2">Contact</a>
    </nav>
    <div class="mb-2">
      <a href="mailto:email@example.com" class="text-muted">
        <i class="far fa-envelope-open mr-1"></i> Email Us
      </a>
    </div>
    <div class="mb-3">
      <a href="#" target="_blank" class="text-muted mx-2" aria-label="GitHub"><i class="fab fa-github-square fa-lg"></i></a>
      <a href="#" target="_blank" class="text-muted mx-2" aria-label="LinkedIn"><i class="fab fa-linkedin fa-lg"></i></a>
      <a href="#" class="text-muted mx-2" aria-label="Facebook"><i class="fab fa-facebook fa-lg"></i></a>
      <a href="#" class="text-muted mx-2" aria-label="Instagram"><i class="fab fa-instagram fa-lg"></i></a>
    </div>
    <p class="text-muted mb-0">&copy; 2025 Vin Diesel Trucking</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <script>
    $('#searchForm').on('submit', function(e) {
      e.preventDefault();

      const vin = $('#vinInput').val().trim();
      if (!vin) {
        $('#results').html(`<div class="alert alert-warning">Please enter a VIN to search.</div>`);
        return;
      }

      $('#results').html('<div class="alert alert-info">Loading data for VIN: <strong>' + vin + '</strong>...</div>');

      const dataToSend = JSON.stringify({ vins: [vin] });

      $.ajax({
        url: 'decode_vins.php', 
        method: 'POST',
        contentType: 'application/json',
        data: dataToSend,
        dataType: 'json',
        success: function(response) {
          if (response.success && response.data && response.data.length > 0) {
            const vinInfo = response.data[0]; 

            let html = `<h4>VIN Information for <code>${vin}</code>:</h4>`;
            html += '<table class="table table-bordered table-sm"><tbody>';
            for (const key in vinInfo) {
              html += `<tr><th>${key}</th><td>${vinInfo[key]}</td></tr>`;
            }
            html += '</tbody></table>';

            $('#results').html(html);
          } else {
            $('#results').html('<div class="alert alert-warning">No data found for the entered VIN.</div>');
          }
        },
        error: function(xhr, status, error) {
          $('#results').html(`<div class="alert alert-danger">Error fetching data: ${error}</div>`);
        }
      });
    });
  </script>
</body>

</html>
