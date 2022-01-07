<?php if($this->session->userdata('admin')['username'] != TRUE ) {
    redirect(base_url('admin/login'));
    
    } ?>
<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PatriotBetta</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" href="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <!-- Bootstrap Core CSS -->
        
        <link href="<?php echo base_url()?>assets/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url()?>assets/css/metisMenu.min.css" rel="stylesheet">
        
        <!-- Timeline CSS -->
                <!-- Custom CSS -->
        <link href="<?php echo base_url()?>assets/css/css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?php echo base_url()?>assets/css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        
</head>