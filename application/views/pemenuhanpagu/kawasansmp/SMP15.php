<div class="row" id="header-isi">
    <div class="col-sm-12">
        <a href="<?php echo base_url();?>" title="kembali ke halaman utama"><span style="margin-right:10px;" class="fa fa-home"></span>halaman utama</a>
        <h1>Pengumuman Hasil</h1>
        <h2>Pemenuhan Pagu PPDB SMP Sekolah Kawasan</h2>
        <ol>
            <li>Daftar ulang pemenuhan pagu sekolah kawasan dimulai Sabtu tanggal 5 Juli 2014 hingga Senin 7 Juli 2014 pukul 14.00 WIB di sekolah tujuan.</li>
            <li>Membawa fotokopi surat keterangan lulus/UN/US dengan menunjukkan aslinya.</li>
            <li>Membawa fotokopi kartu keluarga dengan menunjukkan aslinya.</li>
        </ol>
        <br/>
    </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <h2>Bukti Pemenuhan Pagu Sekolah Kawasan SMP</h2>

    <?php echo form_open('hasil/getpemenuhanbukti/smp/kawasan', array('id' => 'formCari', 'class' => 'form-inline')); ?>
        <div class="input-control text">
            <label class="fg-color-white"><strong>No UN/US : </strong></label>
            <?php
               echo form_input(array(
                        'class' => 'form-control',
                        'name' => 'noUn',
                        'maxlength' => '14',
                    )); ?>
            <button class="btn btn-info"  onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Cari</button>
        </div>
    <?php echo form_close(); ?>
  </div>
</div>
<hr/>

<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <?php echo form_open('hasil/pemenuhanpagu/kawasan/smp', array('id' => 'formCari', 'class' => 'form-inline')); ?>
                    <div class="input-control text">
                        <label class="fg-color-white"><strong>Nama Sekolah : </strong></label>
                        <?php $options= array(''=>'- Pilih Sekolah -', 'SMP1' => 'SMP NEGERI 1', 'SMP2' => 'SMP NEGERI 2', 'SMP3' => 'SMP NEGERI 3', 'SMP6' => 'SMP NEGERI 6', 'SMP12' => 'SMP NEGERI 12', 'SMP15' => 'SMP NEGERI 15', 'SMP19' => 'SMP NEGERI 19', 'SMP22' => 'SMP NEGERI 22', 'SMP25' => 'SMP NEGERI 25', 'SMP26' => 'SMP NEGERI 26', 'SMP35' => 'SMP NEGERI 35');
                        echo form_dropdown('sekolah', $options, 'SMP15', 'class="form-control"'); ?>
                        <button class="btn btn-info" onclick="document.getElementById('formCari').submit()" style="cursor: pointer"><span style="margin-right:10px;" class="fa fa-search"></span>Cari</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" style="max-height: 500px; overflow-y: auto;">
                <h2>Hasil Pemenuhan Pagu SMP Negeri 15</h2>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr><th>NO</th><th>NO UN</th> <th>NAMA</th><th>ASAL SEKOLAH</th><th>NILAI</th></tr>
                    </thead>
                    <tbody>
                         <tr>
                          <td>1</td>
                          <td>11405017990312</td>
                          <td>ZULFIKAR SURYA SISWOYO</td>
                          <td>SD ANGKASA</td>
                          <td>123.23</td>
                         </tr>
                         <tr>
                          <td>2</td>
                          <td>11405015700667</td>
                          <td>QOIRUN ABABIL</td>
                          <td>SDN SIDOTOPO WETAN II NO. 256</td>
                          <td>123.19</td>
                         </tr>
                         <tr>
                          <td>3</td>
                          <td>11405015710854</td>
                          <td>AULIA DESTYA PUTRI</td>
                          <td>SDN SIDOTOPO WETAN IV/558</td>
                          <td>123.17</td>
                         </tr>
                         <tr>
                          <td>4</td>
                          <td>11405110050143</td>
                          <td>NIHLAH MAULIDIA BUNGA SAUJANNA<sup>MT</sup></td>
                          <td>SD NEGERI MAGERSARI</td>
                          <td>123.09</td>
                         </tr>
                         <tr>
                          <td>5</td>
                          <td>11405017940347</td>
                          <td>NOVITA ARIANTI NUR FADILAH</td>
                          <td>SDN BULAK RUKEM<span style='mso-spacerun:yes'>  </span>I<span
                          style='mso-spacerun:yes'>  </span>NO. 258</td>
                          <td>123.07</td>
                         </tr>
                    </tbody>
                </table>

                Keterangan : <br>
                <b>(M)</b> : Mutasi
            </div>
        </div>
    </div>
</div>