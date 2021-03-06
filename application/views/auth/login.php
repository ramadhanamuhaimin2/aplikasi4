    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">
                                            <i class="fas fa-book-reader fa-4x text-primary"></i> <br>
                                            <small>AFK LIBRARY</small>
                                        </h1>
                                    </div>

                                    <?= $this->session->flashdata('message') ?>

                                    <form class="user" method="POST" action="<?= base_url() ?>auth">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username"
                                                name="username" aria-describedby="emailHelp" placeholder="Username"
                                                value="<?= set_value('username') ?>">
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password"
                                                name="password" placeholder="Password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-6 offset-3">
                                                <button type="submit" class="btn btn-primary btn-user btn-block warna">
                                                    Login
                                                </button>
                                            </div>
                                        </div>

                                    </form>
                                    <!-- <hr> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>