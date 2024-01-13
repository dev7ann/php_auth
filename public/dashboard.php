<!-- Dashboard.php -->
<?php include('layout.php'); ?>

<main role="main" class="col-md-10 col-12 ml-sm-auto px-md-4">

    <h1>Welcome to the Dashboard!</h1>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                User Details
                <button class="btn btn-primary pull-right">Edit</button>
            </div>
            <div class="card-body">

                <!-- Your user details card content goes here -->

                <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">First Name</h5>
                    <p class="card-text"><?php echo $user_details->first_name; ?></p>
                </div>

                <div class="col-md-6">
                    <h5 class="card-title">Middle Name</h5>
                    <p class="card-text"><?php echo $user_details->middle_name; ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Last Name</h5>
                    <p class="card-text"><?php echo $user_details->last_name; ?></p>
                </div>

                <div class="col-md-6">
                    <h5 class="card-title">Phone</h5>
                    <p class="card-text"><?php echo $user_details->phone; ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">ID Number</h5>
                    <p class="card-text"><?php echo $user_details->id_no; ?></p>
                </div>

                <div class="col-md-6">
                    <h5 class="card-title">Age</h5>
                    <p class="card-text"><?php echo $user_details->age; ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Gender</h5>
                    <p class="card-text"><?php echo $user_details->gender; ?></p>
                </div>

                <div class="col-md-6">
                    <h5 class="card-title">Email</h5>
                    <p class="card-text"><?php echo $user_details->email; ?></p>
                </div>
            </div>

        </div>

            </div>
        </div>
    </div>

</main>
