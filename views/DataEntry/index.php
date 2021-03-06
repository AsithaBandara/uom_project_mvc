
<div class="col-sm-10">
    <!-- Project Manager Registration start -->
    <hr>
    <div class="project_manager">

        <div class="row">
            <div class="col-sm-4">
                <p><button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#add_leader">Add New Data Entry</button></p>
            </div>
            <div class="col-sm-8" id="search_by_email">
                <p><input type="text" placeholder="search by email" class="form-control input-sm"></button></p>
            </div>

        </div>

        <div class="panel-body" style="color: red;" >
            <?php
            if (isset($this->error)) {
                $came_error = $this->error;
                print_r($came_error['error']);
            }
            ?>

        </div>
        <hr>

        <table class="table table-striped table-bordered table-hover" id="projects">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Email</th>
                    <th>Description</th>
                    <th>Status</th>

                    <th></th>
                </tr>
            </thead>
            <tbody><?php
                foreach ($this->DataEntryList as $key => $value) {
                    ?>
                    <tr>

                        <td><?php echo $value['id']; ?></td>
                        <td ><?php echo $value['email']; ?></td>
                        <td><?php echo $value['description']; ?></td>
                        <td>                          
                            <button class="btn 

                                    <?php
                                    if ($value['status'] == 'available') {

                                        echo 'btn-success';
                                    } else
                                    if ($value['status'] == 'occuipied') {
                                        echo 'btn-danger';
                                    }
                                    ?>"><?php echo $value['status']; ?></button>
                        </td>
                        <td class="center">

                            <a href="<?php echo URL . "DataEntry/edit/" . $value['id']; ?>" ><button class="btn ">Edit</button></a>

                            <a href="<?php echo URL . "DataEntry/delete/" . $value['id']; ?>"><button class="btn ">Remove</button></a>

                        </td>
                    </tr>

                    <?php
                }
                ?>

            </tbody>
        </table>


    </div>
    <!-- Project Manager Registration end -->


</div>


<!-- ===================================================================================================================   -->


<!-- Add manager model form start-->
<div class="modal fade" id="add_leader">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add New Data Entry</h4>
            </div>
            <div class="modal-body">

                <form method="post" action="<?php echo URL; ?>DataEntry/create">
                    <div class="form-group">
                        <label>Email address / Username</label>
                        <input type="email" class="form-control" name="username" id="manager_uname" placeholder="Username" required="">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" id="manager_pass" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label >Re-Enter Password</label>
                        <input type="password" class="form-control" name="password_again" id="manager_re_pass" placeholder="Re-Enter Password" required>
                    </div>
                    <div class="form-group">
                        <label >Description</label>
                        <input type="text" class="form-control" name="description" id="manager_description" placeholder="Description" required>
                    </div>
                    <button  type="submit" class="btn btn-block btn-success">Add</button>
                </form>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>


        </div>
    </div>
</div>
<!-- Add manager Form end -->