<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Welcome to Yii Application !</h1>


    </div>

    <div class="body-content">
        <button class="btn-primary mb-4">Create</button>


        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    if (count($employees) > 0) : ?>


                        <?php
                        foreach ($employees as $employee): ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?php
                                    echo $employee->name; ?></td>
                                <td><?php
                                    echo $employee->email; ?></td>
                                <td><?php
                                    echo $employee->phone_number; ?></td>
                                <td><?php
                                    echo $employee->address; ?></td>
                                <td>
                                    <button class="btn-success btn-sm"> Edit</button>
                                    <button class="btn-danger btn-sm"> Delete</button>

                                </td>
                            </tr>

                        <?php
                        endforeach; ?>

                    <?php
                    else: ?>
                        <tr>
                            <td>NO data found</td>
                        </tr>
                    <?php
                    endif; ?>
                    </tbody>
                </table>
            </div>


        </div>

    </div>
</div>
