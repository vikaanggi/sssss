<!-- ==============================================
Konten (isi)
=============================================== -->

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Masukan Data Kegiatan
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-lg-12">
        <!-- Pesan Singkat -->
        <?= $this->session->flashdata('pesan')?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header box-solid with-border bg-gray">
            <h3 class="box-title">Tulis Laporan</h3>
          </div>

          

          <form action="<?php echo base_url('masukan/index') ?>" method="post" class="form-horizontal" accept-charset="utf-8" enctype="multipart/form-data">
          
          <input type="hidden" name="nip" value="<?= $this->session->user; ?>">
            
          
            <div class="box-body">
              <div class="form-group">
                <label for="petugas" class="col-sm-2 control-label">Petugas</label>
                <div class="col-sm-10">
                    
                    <select class="form-control" name="peg_nama">
                       <option>Pilih Petugas</option>
                            <option value="I KT. AGUS KUSMAYADI, S.IK., S.H">I KT. AGUS KUSMAYADI, S.IK., S.H.</option>
                            <option value="I NYOMAN SUMARDITA">I NYOMAN SUMARDITA</option>
                            <option value="I KETUT PUTRA SISWANTO, S.E ">I KETUT PUTRA SISWANTO, S.E</option>
                            <option value="M. SOLIHIN, S.T. ">M. SOLIHIN, S.T.</option>
                            <option value="SUTRIAJI CAHYONO S, S.H.">SUTRIAJI CAHYONO S, S.H.</option>
                            <option value="I KETUT GUNASTRA">I KETUT GUNASTRA</option>
                            <option value="I PT. ARTAYA TUSAN, S.KOM.">I PT. ARTAYA TUSAN, S.KOM.</option>
                            <option value="I MADE BUDIANA">I MADE BUDIANA</option>
                            <option value="YANTI ASWNAR ">YANTI ASWNAR</option>
                            <option value="I WAYAN ARTAWAN ">I WAYAN ARTAWAN</option>
                            <option value="JULIO REYNALDI EKA PRATAMA AP.">JULIO REYNALDI EKA PRATAMA AP.</option>
                            <option value="I PUTU DIPA PRADNYANA">I PUTU DIPA PRADNYANA</option>
                            <option value="I MADE ARDA GINARTA">I MADE ARDA GINARTA</option>
                            <option value="PUTU GEDE FAJAR JUNIAN JAYA ">PUTU GEDE FAJAR JUNIAN JAYA</option>
                            <option value="I KADEK APRIYATNA">I KADEK APRIYATNA</option>
                            <option value="FESTIAN FEBRI ANTAZA">FESTIAN FEBRI ANTAZA</option>
                            <option value="GEDE AGUS ANDIKA PRATAMA">GEDE AGUS ANDIKA PRATAMA</option>
                            <option value="I GEDE KARMA SANTIYASA">I GEDE KARMA SANTIYASA</option>
                            <option value="I PUTU DEDE SATRIA WIBAWA">I PUTU DEDE SATRIA WIBAWA</option>
                            <option value="I MADE PURNA GUNAWAN">I MADE PURNA GUNAWAN</option>
                            <option value="NANANG PRI HASMOKO, S.T., S.H., MM. ">NANANG PRI HASMOKO, S.T., S.H., MM.</option>
                            <option value="IB. PT. MARUTI, S.KOM.">IB. PT. MARUTI, S.KOM.</option>
                            <option value="I NYOMAN PARWA">I NYOMAN PARWA</option>
                            <option value="SUGENG DIDIK AGUSYANTO">SUGENG DIDIK AGUSYANTO</option>
                            <option value="I NYOMAN SADIA">I NYOMAN SADIA</option>
                            <option value="I WAYAN PUTU PARTAMA">I WAYAN PUTU PARTAMA</option>
                            <option value="I MADE MAHARDIKA YASA">I MADE MAHARDIKA YASA</option>
                            <option value="I PUTU EKA ADNYANA">I PUTU EKA ADNYANA</option>
                            <option value="PT. GDE TEDY PRATIDINA, S.H.">PT. GDE TEDY PRATIDINA, S.H.</option>
                            <option value="DEWA MADE AGUS MAR DIKA">DEWA MADE AGUS MAR DIKA</option>
                            <option value="A.A. RAHADI KUSUMA, S.H.">A.A. RAHADI KUSUMA, S.H.</option>
                            <option value="KM. OKKY BRAWIDA DEWANTARA">KM. OKKY BRAWIDA DEWANTARA</option>
                            <option value="MUHAMMAD RIFQI ALKAUTSAR">MUHAMMAD RIFQI ALKAUTSAR</option>
                            <option value="MADE PUTRA JAYA AMARTHA">MADE PUTRA JAYA AMARTHA</option>
                            <option value="I MADE WISNU ADI WIRYAWAN"> I MADE WISNU ADI WIRYAWAN</option>
                            <option value="I DEWA GEDE DWI  MAHARDIKA">I DEWA GEDE DWI  MAHARDIKA</option>
                            <option value="I MADE AGUSTIRA">I MADE AGUSTIRA</option>
                            <option value="KETUT UTAMI ARIANI">KETUT UTAMI ARIANI</option>
                            <option value="NI LP. AYU MULIYATHI">NI LP. AYU MULIYATHI</option>
                            <option value="A.A. RAI SUBADRA">A.A. RAI SUBADRA</option>
                            <option value="I NYOMAN GEDE SURATA">I NYOMAN GEDE SURATA</option>
                            <option value="A.A. MADE WENTEN, S.H.">A.A. MADE WENTEN, S.H.</option>
                            <option value="I WYN. SUWIYASA PETRUS WIBOWO">I WYN. SUWIYASA PETRUS WIBOWO</option>
                            <option value="I NYOMAN SUWECA">I NYOMAN SUWECA</option>
                            <option value="I WAYAN SUKADANA">I WAYAN SUKADANA</option>
                            <option value="I GUSTI NGURAH MEKAYANA, S.H.">I GUSTI NGURAH MEKAYANA, S.H.</option>
                            <option value="DEWA SANG MADE WIJAYA, S.H.">DEWA SANG MADE WIJAYA, S.H.</option>
                            <option value="I MADE ARIF BUDHI UTAMA">I MADE ARIF BUDHI UTAMA</option>
                            <option value="I PUTU ARJUN PINTARA">I PUTU ARJUN PINTARA</option>
                            <option value="I KADEK YOGIN NEOKOMARA WISMA">I KADEK YOGIN NEOKOMARA WISMA</option>
                            <option value="I PUTU ANDIKA WAHYUDI PUTRA">I PUTU ANDIKA WAHYUDI PUTRA</option>
                            <option value="DESAK AYU DYTHA DAMAYANTHI">DESAK AYU DYTHA DAMAYANTHI</option>
                            <option value="I GST. NGR. AGUS BAGUS BIMA P.">I GST. NGR. AGUS BAGUS BIMA P.</option>
                            <option value="I NYM. AGUS MAS S, A.MD., S.E., M.M.">I NYM. AGUS MAS S, A.MD., S.E., M.M.</option>
                    
		              </select>
                </div>  
            </div>
            
              <div class="form-group">
                <label for="kegiatan" class="col-sm-2 control-label">Kegiatan</label>
                <div class="col-sm-10">
                  <input name="kegiatan" type="text" class="form-control" id="kegiatan" placeholder="Masukan Kegiatan.." required>
                  <?= form_error('kegiatan', '<small class="text-danger">', '</small>') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-2">
                  <input name="tanggal" type="date" class="form-control" id="tanggal" required>
                  <?= form_error('tanggal', '<small class="text-danger">', '</small>') ?>
                </div>
                <label for="jammulai" class="col-sm-2 control-label">Jam Mulai</label>
                <div class="col-sm-2">
                  <input name="jam_mulai" type="time" class="form-control" id="jammulai" required>
                  <?= form_error('jam_mulai', '<small class="text-danger">', '</small>') ?>
                </div>

                <label for="jamselesai" class="col-sm-2 control-label">Jam Selesai</label>
                <div class="col-sm-2">
                  <input name="jam_selesai" type="time" class="form-control" id="jamselesai" required>
                  <?= form_error('jam_selesai', '<small class="text-danger">', '</small>') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="satker" class="col-sm-2 control-label">SATKER</label>
                  <div class="col-sm-4">
                  <select class="form-control" name="satker">
                            <option>pilih satker</option>
                            <option value="Pimpinan SATKER BID TIK">Pimpinan SATKER BID TIK</option>
                            <option value="SUBBID TEKKOM">SUBBID TEKKOM</option>
                            <option value="SUBBID TEKINFO">SUBBID TEKINFO</option>
                            <option value="SUBBAGRENMIN">SUBBAGRENMIN</option>
                  </select>
                  </div>

              </div>

              <div class="form-group">
                <label for="jenis_layanan" class="col-sm-2 control-label">Jenis Layanan</label>
                  <div class="col-sm-4">
                  <select class="form-control" name="jenis_layanan">
                            <option>pilih layanan</option>
                            <option value="Pelayanan Sound System">Pelayanan Sound System</option>
                            <option value="Pelayanan Video Conference">Pelayanan Video Conference</option>
                            <option value="Pelayanan Zoom Meeting">Pelayanan Zoom Meeting</option>
                            <option value="Pelayanan Audio dan Visual LED">Pelayanan Audio dan Visual LED</option>
                            <option value="Pelayanan Sentral Komunikasi">Pelayanan Sentral Komunikasi</option>
                            <option value="Pelayanan Jaringan Internet">Pelayanan Jaringan Internet</option>
                            <option value="Pelayanan Jaringan CCTV">Pelayanan Jaringan CCTV</option>
                            <option value="Pelayanan Alat Komunikasi Repeater">Pelayanan Alat Komunikasi Repeater</option>
                            <option value="Penyiapan Alat Komunikasi HT">Penyiapan Alat Komunikasi HT</option>
                            <option value="Penyiapan Alat Komunikasi Radio RIG">Penyiapan Alat Komunikasi Radio RIG</option>
                            <option value="Penyiapan Alat Komunikasi Khusus dan Kommob">Penyiapan Alat Komunikasi Khusus Kommob</option>
                            <option value="Penyiapan Alat Komunikasi Khusus Mobil Sound System">Penyiapan Alat Komunikasi Khusus Mobil Sound System</option>
                            <option value="Penyiapan Alat Komunikasi Khusus Flyaway Factory SAT">Penyiapan Alat Komunikasi Khusus Flyaway Factory SAT</option>
                            <option value="Pelayanan Email Dinas">Pelayanan Email Dinas</option>
                            <option value="Pelayanan Fax">Pelayanan Fax</option>
                            
                            

                  </select>
                  </div>

              </div>
            
              <div class="form-group">
                <label for="tempat_kegiatan" class="col-sm-2 control-label">Tempat Kegiatan</label>
                  <div class="col-sm-4">
                  <select class="form-control" name="tempat_kegiatan">
                            <option>pilih tempat kegiatan</option>
                            <option value="Gedung PRG">Gedung PRG</option>
                            <option value="Gedung Rupatama">Gedung Rupatama</option>
                            <option value="Lounge Andalan">Lounge Andalan</option>
                            <option value="Suite Room PRG">Suite Room PRG</option>
                            <option value="Command Center">Command Center</option>
                            <option value="Halaman Depan Mapolda">Halaman Depan Mapolda</option>
                            <option value="Halaman Belakang Mapolda">Halaman Belakang Mapolda</option>
                            <option value="Sport Center POLDA Bali">Sport Center POLDA Bali</option>
                            <option value="Lainnya">Lainnya</option>      
                  </select>
                  </div>

              </div>

              <div class="form-group">
                <label for="foto" class="col-sm-2 control-label">Upload Foto</label>
                <div class="col-sm-10">
                <input type="file" name="foto" class="form-control" size="20" id="foto" required="">
                <?= form_error('foto', '<small class="text-danger">', '</small>') ?>
                </div>
              </div>
          

              <div class="form-group">
                <label for="dokumen" class="col-sm-2 control-label">Upload Dokumen</label>
                <div class="col-sm-10">
                <input type="file" name="dokumen" class="form-control" size="20" id="dokumen"  required="">
                <?= form_error('dokumen', '<small class="text-danger">', '</small>') ?>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" name ="submit" class="btn btn-primary">Simpan Laporan</button>
                </div>
              </div>
            <?= form_close() ?>
            </div>
            </form>
            
        </div>
      </div>
    </div>
  </section>
</div>
