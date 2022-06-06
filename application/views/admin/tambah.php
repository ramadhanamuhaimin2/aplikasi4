</style>
<div class="container">
    <div id="container" class="container shadow p-3 mb-4 mt-3 bg-white rounded">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <h2 class="text-center pt-4"><?= $title ?></h2>
                <div class="info-form"><br>

                    <?= form_open('admin/tambah')?>

                    <div class="row">
                        <div class="col-4">
                            <?= form_label('NIS', 'nis') ?>
                            <?= form_input([
                                'type' => 'number',
                                'name' => 'nis',
                                'id' => 'nis',
                                'class' => 'form-control',
                                'value' => set_value("nis") 
                            ]) ?>
                            <small class="form-text text-danger">
                                <?= form_error('nis') ?>
                            </small>
                        </div>
                    </div>

                    <br>

                    <?= form_label('Nama', 'nama') ?>
                    <?= form_input([
                            'type' => 'text',
                            'name' => 'nama',
                            'id' => 'nama',
                            'class' => 'form-control',
                            'value' => set_value("nama")
                            ]) ?>
                    <small class="form-text text-danger">
                        <?= form_error('nama') ?>
                    </small>
                    <br>

                    <div class="row">
                        <div class="col-4">
                            <?= form_label('Tempat Lahir', 'tp_lhr') ?>
                            <?= form_input([
                                        'type' => 'text',
                                        'name' => 'tp_lhr',
                                        'id' => 'tp_lhr',
                                        'class' => 'form-control',
                                        'value' => set_value("tp_lhr")
                                    ]) ?>
                            <small class="form-text text-danger">
                                <?= form_error('tp_lhr') ?>
                            </small>
                        </div>

                        <div class="col-4">
                            <?= form_label('Tanggal Lahir', 'tg_lhr') ?>
                            <?= form_input([
                                        'type' => 'date',
                                        'name' => 'tg_lhr',
                                        'id' => 'tg_lhr',
                                        'class' => 'form-control',
                                        'value' => set_value("tg_lhr")
                                    ]) ?>
                            <small class="form-text text-danger">
                                <?= form_error('tg_lhr') ?>
                            </small>
                        </div>

                        <div class="col-4">
                            <?= form_label('Jenis Kelamin', 'gender') ?> <br>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" id="L" value="Laki-Laki" class="form-check-input"
                                    <?php echo  set_radio('gender', 'Laki-Laki'); ?> />
                                <label for="L" class="form-check-label">Laki-Laki</label> <br>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gender" id="P" value="Perempuan" class="form-check-input"
                                    <?php echo  set_radio('gender', 'Perempuan'); ?> />
                                <label for="P" class="form-check-label">Perempuan</label>
                            </div>
                            <small class="form-text text-danger">
                                <?= form_error('gender') ?>
                            </small>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-6">
                            <?= form_label('No. HP', 'no_hp') ?>
                            <?= form_input([
                                'type' => 'number',
                                'name' => 'no_hp',
                                'id' => 'no_hp',
                                'class' => 'form-control',
                                'value' => set_value("no_hp")
                                ]) ?>
                            <small class="form-text text-danger">
                                <?= form_error('no_hp') ?>
                            </small>
                        </div>

                        <div class="col-6">
                            <?= form_label('Email', 'email') ?>
                            <?= form_input([
                                'type' => 'email',
                                'name' => 'email',
                                'id' => 'email',
                                'class' => 'form-control',
                                'value' => set_value("email")
                            ]) ?>
                            <small class="form-text text-danger">
                                <?= form_error('email') ?>
                            </small>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-5">
                            <?= form_label('Kelas', 'kelas') ?>
                            <?php 
                                foreach ($kelas as $row) {
                                    $options[$row['id_kelas']] = $row['nama_kelas'];
                                }
                                $newoptions = array(null => 'Pilih kelas...') + $options;

                                echo form_dropdown('kelas', $newoptions, set_value('kelas'), 'class="form-control " id="kelas"')
                            ?>
                            <small class="form-text text-danger">
                                <?= form_error('kelas') ?>
                            </small>
                        </div>
                    </div>

                    <br>

                    <?= form_label('Alamat', 'alamat') ?>
                    <?= form_textarea([
                                'name' => 'alamat',
                                'id' => 'alamat',
                                'class' => 'form-control',
                                'rows' => '2',
                                'cols' => '30',
                                'value' => set_value("alamat")
                            ], '', ['style' => 'resize:none'
                            ]) ?>
                    <small class="form-text text-danger">
                        <?= form_error('alamat') ?>
                    </small>

                    <br>

                    <?= form_submit('tombolSubmit', 'TAMBAH', 'class="btn btn-primary"') ?>

                    <?= form_close() ?>

                </div>
                <br>
            </div>
        </div>
    </div>
</div>