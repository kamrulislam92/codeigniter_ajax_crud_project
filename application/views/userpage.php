
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <section class="wrapper">
                <div class="container">
                    <?php if($this->session->flashdata('status')) :?>
                        <div class="alert alert-success">
                            <?= $this->session->flashdata('status'); ?>
                        </div>
                    <?php endif ; ?>
                    <div class="card">
                        <div class="card-header">
                            <h5>This is user</h5>
                        </div>
                        <div class="card-body">
                           <h5> First Name : <?= $this->session->userdata('authUser')['first_name']; ?></h5>
                            <h5>Last Name  : <?= $this->session->userdata('authUser')['last_name']; ?></h5>
                            <h5>Email ID   : <?= $this->session->userdata('authUser')['email']; ?></h5>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
