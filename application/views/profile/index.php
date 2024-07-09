<?php
// Mendapatkan shift dari akun


// Query database untuk mendapatkan start dan end berdasarkan shift
$this->db->select('start, end');
$this->db->from('shift');
$this->db->where('id', $shift);
$query = $this->db->get();

if ($query->num_rows() > 0) {
    $row = $query->row();
    $startTime = $row->start;
    $endTime = $row->end;
} else {
    // Set default waktu jika shift tidak ditemukan
    $startTime = '09:00:00';
    $endTime = '17:00:00';
}
?>

  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="card rounded-0 shadow">
      <div class="card-header">
        <h3 class="card-title font-weight-bolder text-dark h3 mb-0"><?= $account['name']?></h3>
      </div>
      <div class="card-body">
        <div class="container-fluid">
          <div class="row">

            <!-- left -->
            <div class="col-sm-10 col-md-5 col-lg-4 col-xl-3 offset-sm-1 offset-md-0 offset-lg-0 offset-xl-0 text-center">
              <img src="<?= base_url('images/pp/'). $account['image'];?>" class="rounded-circle img-thumbnail">
            </div>

            <!-- right -->
            <div class="col-sm-10 col-md-6 offset-sm-1">
              <h1 class="h3 text-white bg-gradient-primary p-1 rounded-0 mt-1 mb-3">Information Karyawan</h1>
              <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">ID Karyawan</th>
                    <td>: <?= $account['id'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">Jenis Kelamin</th>
                    <td>: <?php if ($account['gender'] == 'M') {
                            echo 'Male';
                          } else {
                            echo 'Female';
                          };?></td>
                  </tr>
                  <tr>
                    <th scope="row">Departmen</th>
                    <td>: <?= $account['department']?></td>
                  </tr>
                  <tr>
                    <th scope="row">Jam Kerja</th>
                    <td>: <?= date("h:i A", strtotime($startTime));?> - <?= date("h:i A", strtotime($endTime));?></td>
                  </tr>
                  <tr>
                    <th scope="row">Tanggal lahir</th>
                    <td>: <?= $account['birth_date'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">Tanggal Bergabung</th>
                    <td>: <?= $account['hire_date']?></td>
                  </tr>
                </tbody>
              </table>
            </div>
            </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->