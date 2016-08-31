<?php include_once '../header.php'; ?>

<div class="wrapper">
    <div class="table_nav">
        <div class="pull-left">
            <a class="create-btn btn btn-sm btn-success m-b-1" data-toggle="tooltip" title="Create" data-placement="top">
                <i class="fa fa-plus"></i> <span class="">Create</span>
            </a>
            <a class="trash-btn btn btn-sm btn-warning m-b-1" data-toggle="tooltip" title="Delete" data-placement="top">
                <i class="fa fa-trash"></i> <span class="">Delete</span>
            </a>
            <a class="restore-btn btn btn-sm btn-primary m-b-1" data-toggle="tooltip" title="Restore" data-placement="top">
                <i class="fa fa-mail-reply"></i> <span class="">Restore</span>
            </a>
            <a class="remove-btn btn btn-sm btn-danger m-b-1" data-toggle="tooltip" title="Remove" data-placement="top">
                <i class="fa fa-close"></i> <span class="">Remove</span>
            </a>
        </div>
        <div class="pull-right m-b-1">
            <form class="form-inline pull-xs-right">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-sm" type="text" name="s" placeholder="Search...">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-outline-info"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Field 1</th>
                    <th>Field 2</th>
                    <th>Field 3</th>
                    <th>Field 4</th>
                    <th>Field 5</th>
                    <th></th>
                </tr>
            </thead>
            <?php for ($i = 0; $i < 5; $i++) { ?>
                <tr>
                    <td>Value 1</td>
                    <td>Value 2</td>
                    <td>Value 3</td>
                    <td>Value 4</td>
                    <td>Value 5</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-info" data-toggle="tooltip" title="Edit" data-placement="top"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>

<?php include_once '../footer.php'; ?>

