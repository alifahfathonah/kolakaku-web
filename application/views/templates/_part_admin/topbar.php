    
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="javascript:void(0);"><?php echo strtoupper($about[0]->title); ?> - <?php echo strtoupper($this->ion_auth->get_users_groups($this->session->userdata('user_id'))->result()[0]->name." Dashboard "); ?></a>
        </div>
    </div>
</nav>
<!-- #Top Bar -->