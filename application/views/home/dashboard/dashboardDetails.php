<div class="row">
    <?php require "_DashboardContent.php" ?>
</div>

<?php $Script = '
    <script type="text/javascript">

        $(document).ready(function(){
            App.init();
            App.dashboard();
        });

    </script>
'?>