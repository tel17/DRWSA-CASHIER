<!DOCTYPE html>
<html lang="en">
<?php
include("header.php");
?>
<body>

<?php
include("topbar.php");
?>

<?php
include("sidebar.php");
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Member's Profile </h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Member's Profile</a></li>
        <li class="breadcrumb-item active">Reports</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <!-- Recent Sales -->
      <div class="col-12">
        <div class="card recent-sales overflow-auto">
          <div class="card-body">
            <h5 class="card-title">Member's Profile <span>| Reports</span></h5>
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <div>
                <button type="button" class="btn btn-light" id="printBtn" title="Print Table">PRINT</button>
                <button type="button" class="btn btn-light" id="pdfBtn" title="Download PDF">PDF</button>
                <button type="button" class="btn btn-light" id="excelBtn" title="Download Excel">EXCEL</button>
              </div>
              <div>
              <a href="add_members_profile.php" class="btn btn-success" title="Edit Information">
                      <i class="bi bi-pencil-square"></i> 
                    </a>
              </div>
            </div>
            <table class="table table-borderless datatable" id="Customer_Manager_Report">
              <thead>
                <tr>
                  <th scope="col" style="text-align: center;">#</th>
                  <th scope="col" style="text-align: center;">ACCOUNT NUMBER</th>
                  <th scope="col" style="text-align: center;">NAME</th>
                  <th scope="col" style="text-align: center;">AREA</th>
                  <th scope="col" style="text-align: center;">BLOCK</th>
                  <th scope="col" style="text-align: center;">AGE</th>
                  <th scope="col" style="text-align: center;">STATUS</th>
                  <th scope="col" style="text-align: center;">GENDER</th>
                  <th scope="col" style="text-align: center;">CONTACT</th>
                  <th scope="col" style="text-align: center;">BIRTHPLACE</th>
                  <th scope="col" style="text-align: center;">EDUCATIONAL ATTAINMENT</th>
                  <th scope="col" style="text-align: center;">FAMILY MEMBER 1</th>
                  <th scope="col" style="text-align: center;">FAMILY MEMBER 2</th>
                  <th scope="col" style="text-align: center;">FAMILY MEMBER 3</th>
                  <th scope="col" style="text-align: center;">INCOME</th>
                  <th scope="col" style="text-align: center;">CEDULA</th>
                  <th scope="col" style="text-align: center;">CLEARANCE</th>
                  <th scope="col" style="text-align: center;">METER NUMBER</th>
                  <th scope="col" style="text-align: center;">DATE FILED</th>
                  <th scope="col" style="text-align: center;">BIRTHDAY</th>
                  <th scope="col" style="text-align: center;">AMOUNT</th>
                  <th scope="col" style="text-align: center;">MONTH</th>
                  <th scope="col" style="text-align: center;">BENEFICIARY 1</th>
                  <th scope="col" style="text-align: center;">BENEFICIARY 2</th>
                  <th scope="col" style="text-align: center;">BENEFICIARY 3</th>
                                  

                  <th scope="col" style="text-align: center;">Status</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                      // Query to fetch data from tbl_maintenance
                      $query = "SELECT * FROM tbl_members_profile";
                      $result = $con->query($query);

                      // Check if any rows are returned
                      if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                  ?>
                  <tr>
                      <td style="text-align: center;"><?php echo $row["id"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["account_number"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["name"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["area"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["block"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["age"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["status"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["gender"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["contact"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["birthplace"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["education_attainment"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["family_member_1"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["family_member_2"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["family_member_3"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["income"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["cedula"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["clearance"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["meter_number"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["date_filed"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["birthday"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["amount"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["month_for_data"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["beneficiary_1"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["beneficiary_2"]; ?></td>
                      <td style="text-align: center;"><?php echo $row["beneficiary_3"]; ?></td>
                      <td>
                          <button type="button" class="btn btn-warning" title="Edit Information">
                              <i class="bi bi-pencil-square"></i> 
                          </button>
                      </td>
                  </tr>
                  <?php
                          }
                      } else {
                  ?>
                  <tr>
                      <td colspan="11">
                          <center>No data available at the moment.</center>
                      </td>
                  </tr>
                  <?php
                      }
                  ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- End Recent Sales -->
    </div>
  </section>
</main>
<!-- End Main -->

<?php 
include("footer.php");
?>

<!-- Modal for Adding Data -->
<!-- <div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addDataModalLabel">Add Data</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="add_customer_manager.php" method="POST" id="addForm">
          
        <div class="mb-3">
            <label for="account_number" class="form-label">Account Number</label>
            <input type="text" class="form-control" id="account_number" name="account_number" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="area" class="form-label">Area</label>
            <input type="text" class="form-control" id="area" name="area" required>
        </div>

        <div class="mb-3">
            <label for="block" class="form-label">Block</label>
            <input type="text" class="form-control" id="block" name="block" required>
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" required>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender" required>
        </div>

        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" required>
        </div>

        <div class="mb-3">
            <label for="birthplace" class="form-label">Birthplace</label>
            <input type="text" class="form-control" id="birthplace" name="birthplace" required>
        </div>

        <div class="mb-3">
            <label for="education_attainment" class="form-label">Educational Attainment</label>
            <input type="text" class="form-control" id="education_attainment" name="education_attainment" required>
        </div>

        <div class="mb-3">
            <label for="family_member_1" class="form-label">Family Member 1</label>
            <input type="text" class="form-control" id="family_member_1" name="family_member_1">
        </div>

        <div class="mb-3">
            <label for="family_member_2" class="form-label">Family Member 2</label>
            <input type="text" class="form-control" id="family_member_2" name="family_member_2">
        </div>

        <div class="mb-3">
            <label for="family_member_3" class="form-label">Family Member 3</label>
            <input type="text" class="form-control" id="family_member_3" name="family_member_3">
        </div>

        <div class="mb-3">
            <label for="income" class="form-label">Income</label>
            <input type="number" class="form-control" id="income" name="income">
        </div>

        <div class="mb-3">
            <label for="cedula" class="form-label">Cedula</label>
            <input type="text" class="form-control" id="cedula" name="cedula">
        </div>

        <div class="mb-3">
            <label for="clearance" class="form-label">Clearance</label>
            <input type="text" class="form-control" id="clearance" name="clearance">
        </div>

        <div class="mb-3">
            <label for="meter_number" class="form-label">Meter Number</label>
            <input type="text" class="form-control" id="meter_number" name="meter_number">
        </div>

        <div class="mb-3">
            <label for="date_filed" class="form-label">Date Filed</label>
            <input type="date" class="form-control" id="date_filed" name="date_filed">
        </div>

        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="birthday" name="birthday">
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" class="form-control" id="amount" name="amount">
        </div>

        <div class="mb-3">
            <label for="month" class="form-label">Month</label>
            <input type="text" class="form-control" id="month" name="month">
        </div>

        <div class="mb-3">
            <label for="beneficiary_1" class="form-label">Beneficiary 1</label>
            <input type="text" class="form-control" id="beneficiary_1" name="beneficiary_1">
        </div>

        <div class="mb-3">
            <label for="beneficiary_2" class="form-label">Beneficiary 2</label>
            <input type="text" class="form-control" id="beneficiary_2" name="beneficiary_2">
        </div>

        <div class="mb-3">
            <label for="beneficiary_3" class="form-label">Beneficiary 3</label>
            <input type="text" class="form-control" id="beneficiary_3" name="beneficiary_3">
        </div>


           
        
          <div style="float:right;">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Submit</button>
            
            </div>

        </form>
      </div>
    </div>
  </div>
</div> -->

<!-- jsPDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<!-- jsPDF-AutoTable (plugin for tables in PDF) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.17/jspdf.plugin.autotable.min.js"></script>
<!-- XLSX.js for Excel export -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>


<script>
  // Trigger SweetAlert after form submission
  document.getElementById('addForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission to show SweetAlert first

    // Show SweetAlert Success message
    Swal.fire({
      title: 'Data Added Successfully!',
      text: 'The customer   has been added.',
      icon: 'success',
      confirmButtonText: 'OK'
    }).then((result) => {
      if (result.isConfirmed) {
        // Submit the form after closing the SweetAlert
        this.submit();
      }
    });
  });

  // Print Functionality
  document.getElementById('printBtn').addEventListener('click', function() {
    const table = document.getElementById('Customer_Manager_Report');
    const cloneTable = table.cloneNode(true);

    // Remove last column (buttons) from clone
    const rows = cloneTable.querySelectorAll('tr');
    rows.forEach(row => {
        const cells = row.querySelectorAll('td, th');
        if (cells.length === 7) {
            row.removeChild(cells[6]); // Remove last cell
        }
    });

    // Replace interactive elements in the header with plain text
    const headerCells = cloneTable.querySelectorAll('thead th');
    headerCells.forEach((headerCell) => {
        const button = headerCell.querySelector('button');
        if (button) {
            headerCell.textContent = button.textContent; // Replace with button text
        }
    });

    // Create a print-friendly window
    const printWindow = window.open('', '_blank');
    printWindow.document.write(`
      <html>
        <head>
          <title>Customer Manager Report</title>
          <style>
            body { font-family: Arial, sans-serif; padding: 20px; }
            table { width: 100%; border-collapse: collapse; }
            table, th, td { border: 1px solid black; }
            th, td { padding: 8px; text-align: left; }
          </style>
        </head>
        <body>
          <h1>Customer Manager Report</h1>
          ${cloneTable.outerHTML}
        </body>
      </html>
    `);
    printWindow.document.close();
    printWindow.print();
  });

  // PDF Download Functionality
  document.getElementById('pdfBtn').addEventListener('click', function() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF('landscape');

    doc.text('Customer Manager Report', 10, 10);

    doc.autoTable({
      html: '#Customer_Manager_Report',
      startY: 20,
      columnStyles: {
        6: { cellWidth: 0 }
      },
    });

    // Get the current date in YYYY-MM-DD format
    const currentDate = new Date();
    const formattedDate = currentDate.toISOString().split('T')[0]; // '2025-01-14'

    // Append the date to the file name
    const fileName = `Customer_Manager_Report${formattedDate}.pdf`;

    // Save the file with the new name
    doc.save(fileName);
});

  // Excel Download Functionality
  document.getElementById('excelBtn').addEventListener('click', function () {
    const table = document.getElementById('Customer_Manager_Report');
    const ws = XLSX.utils.table_to_sheet(table, { raw: true });

    const wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, 'Customer_Manager_Report');

    // Get the current date in YYYY-MM-DD format
    const currentDate = new Date();
    const formattedDate = currentDate.toISOString().split('T')[0]; // '2025-01-14'

    // Append the date to the file name
    const fileName = `Customer_Manager_Report_${formattedDate}.xlsx`;

    // Save the file with the new name
    XLSX.writeFile(wb, fileName);
});
</script>

</body>
</html>
