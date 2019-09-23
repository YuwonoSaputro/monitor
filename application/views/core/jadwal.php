<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header py-3">
        <i class="fa fa-align-justify"></i> Daftar jadwal 
        <button class="btn btn-success btn-sm pull-right" onclick="tambah()">Tambah jadwal</button>
      </div>
      <input type="hidden" id="base_url" value="<?= base_url('guru') ?>">
      <form id="form-hapus">
      <input type="hidden" name="check" id="check" value="0">
      <div class="card-body">
        <table class="table table-responsive-sm table-bordered table-striped table-sm" id="appTable">
          <thead>
            <tr>
              <th width="50px">#</th>
              <th width="200px">Nama guru</th>
              <th width="200px">Senin</th>
              <th width="200px">Selasa</th>
              <th width="200px">Rabu</th>
              <th width="200px">Kamis</th>
              <th width="200px">Jumat</th>
              <th>Aksi</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; foreach($guru as $g): ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $g->nama ?></td>
              <td>
                <?php 
                  $senin = $this->db->get_where('jadwal',['hari_id' => 1, 'guru_id' => $g->id])->result();
                ?>
                <?php foreach ($senin as $s): ?>
                    <div>
                      <span class="badge badge-primary"><?= kelas($s->kelas_id) ?></span>
                      <span class="badge badge-success"><?= seling($s->seling_id,'dari') ?></span>
                      <span class="badge badge-danger"><?= seling($s->seling_id,'sampai') ?></span>
                    </div>
                <?php endforeach; ?>
              </td>
              <td>
                <?php 
                  $selasa = $this->db->get_where('jadwal',['hari_id' => 2, 'guru_id' => $g->id])->result();
                ?>
                <?php foreach ($selasa as $s): ?>
                    <div>
                      <span class="badge badge-primary"><?= kelas($s->kelas_id) ?></span>
                      <span class="badge badge-success"><?= seling($s->seling_id,'dari') ?></span>
                      <span class="badge badge-danger"><?= seling($s->seling_id,'sampai') ?></span>
                    </div>
                <?php endforeach; ?>
              </td>
              <td>
                <?php 
                  $rabu = $this->db->get_where('jadwal',['hari_id' => 3, 'guru_id' => $g->id])->result();
                ?>
                <?php foreach ($rabu as $s): ?>
                    <div>
                      <span class="badge badge-primary"><?= kelas($s->kelas_id) ?></span>
                      <span class="badge badge-success"><?= seling($s->seling_id,'dari') ?></span>
                      <span class="badge badge-danger"><?= seling($s->seling_id,'sampai') ?></span>
                    </div>
                <?php endforeach; ?>
              </td>
              <td>
                <?php 
                  $kamis = $this->db->get_where('jadwal',['hari_id' => 4, 'guru_id' => $g->id])->result();
                ?>
                <?php foreach ($kamis as $s): ?>
                    <div>
                      <span class="badge badge-primary"><?= kelas($s->kelas_id) ?></span>
                      <span class="badge badge-success"><?= seling($s->seling_id,'dari') ?></span>
                      <span class="badge badge-danger"><?= seling($s->seling_id,'sampai') ?></span>
                    </div>
                <?php endforeach; ?>
              </td>
              <td>
                <?php 
                  $jumat = $this->db->get_where('jadwal',['hari_id' => 5, 'guru_id' => $g->id])->result();
                ?>
                <?php foreach ($jumat as $s): ?>
                    <div>
                      <span class="badge badge-primary"><?= kelas($s->kelas_id) ?></span>
                      <span class="badge badge-success"><?= seling($s->seling_id,'dari') ?></span>
                      <span class="badge badge-danger"><?= seling($s->seling_id,'sampai') ?></span>
                    </div>
                <?php endforeach; ?>
              </td>
              <td width="100px">
                <a href="<?= base_url('jadwal/edit/'.$g->id) ?>" class="btn btn-success btn-sm">Manage</a>
              </td>
              <td width="50px">
                <input type="checkbox" name="">
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="card-footer">
        <button type="button" id="btn-edit-hapus" class="btn btn-primary btn-sm">Hapus</button>
        <button type="button" id="btn-edit-pilih" class="btn btn-danger btn-sm pull-right">Pilih Semua</button>
      </div>
    </form>
    </div>
  </div>
</div>

