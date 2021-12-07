<?php only_admin_access(); ?>
<?php

use Illuminate\Support\Facades\DB;

only_admin_access(); ?>
<script>
    function delete_bag(id) {
        var are_you_sure = confirm("Bạn đã chắc chắn?");
        if (are_you_sure == true) {
            var data = {}
            data.id = id;
            var url = "<?php print api_url('delete_bag'); ?>";
            var post = $.post(url, data);
            post.done(function(data) {
                mw.reload_module("bag");
                mw.reload_module("bag/list");
            });
        }
    }
</script>
<script>
    $(document).ready(function() {
        $("#add-bag-form").submit(function(event) {
            event.preventDefault();
            var data = $(this).serialize();
            var url = "<?php print api_url('save_bag'); ?>";
            var post = $.post(url, data);
            post.done(function(data) {
                $('#myModal').modal('hide');
                mw.reload_module("bag");
                mw.reload_module("bag/list");
            });
        });


    });
</script>
<script>
    $(document).ready(function() {
        $("#search_form").submit(function(event) {
            event.preventDefault();
            var data = $(this).serialize();
            var url = "<?php print api_url('search'); ?>";
            var post = $.post(url, data);
            post.done(function(data) {
                mw.reload_module("bag");
                mw.reload_module("bag/list");
            });
        });


    });
</script>
<script>
    $(document).ready(function() {
        $("#edit-bag-form").submit(function(event) {
            event.preventDefault();
            var data = $(this).serialize();
            var url = "<?php print api_url('edit_bag'); ?>";
            var post = $.post(url, data);
            post.done(function(data) {
                $('#editModal').modal('hide');
                $('.modal-backdrop').hide()
                mw.reload_module("bag");
                mw.reload_module("bag/list");
            });
        });


    });
</script>
<script>
    $(document).ready(function() {
        $('select').on('change', function() {
            var name = $(this).attr("name");
            var data = name.replace("status-", "")

            var url = "<?php print api_url('update_status'); ?>";
            var post = $.post(url, "id=" + data);
            post.done(function(data) {
                mw.reload_module("scan_code");
                mw.reload_module("scan_code/list");
            });
        });
    });
</script>
<?php
if (!empty($_GET['search'])) {
    $data = DB::table('bags')->get();
    $search = $_GET['search'];
} else {
    $data = DB::table('bags')->get();
}

?>

<div style="text-align: center;">
    <h2>Danh sách mã vận đơn</h2>
</div>
<div style="padding-top: 20px;padding-bottom: 20px;">
    <div class="container" style="display: inline-flex;">
        <div style="width: 30%;">
            <div class="input-group mb-0 prepend-transparent mx-2">
                <div class="input-group-prepend">
                    <span class="input-group-text px-1"><i class="mdi mdi-magnify"></i></span>
                </div>
                <form>
                    <input type="text" name="search" class="js-search-by-keywords-input   form-control form-control-sm" style="border-radius: 0;" value="<?php print(!empty($search) ? $search : "") ?>" placeholder="Tìm mã">
                </form>
            </div>
        </div>
        <div style="width: 60%;">
        </div>
        <div style="width: 20%;">
            <a href="<?php print admin_url('view:modules/load_module:scan_code/edit'); ?>" class="btn btn-outline-warning btn-sm ml-md-2 ml-1 "><?php _e('Quét mã'); ?></a>
        </div>
    </div>
</div>
<div class="container">
    <table width="100%" class="mw-ui-table">
        <thead>
            <tr style="text-align: center;">
                <th>Id</th>
                <th>Mã khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Mã bao</th>
                <th>Số cân</th>
                <th>Số kiện</th>
                <th>Số bao</th>
                <th>Số m3</th>
                <th>Điểm đến</th>
                <th>Ngày tạo</th>
                <th>Ngày nhận</th>
                <th>Người tạo</th>
                <th>Cập nhật</th>
            </tr>
        </thead>
        <?php if ($data) : ?>
            <tbody>
                <?php foreach ($data as $item) : ?>
                    <tr style="text-align: center;">
                        <td><?php print $item->id ?></td>
                        <td><?php print $item->code ?></td>
                        <td><?php print $item->created_at ?></td>
                        <td><?php print $item->time2 ?></td>
                        <td><?php print $item->time3 ?></td>
                        <td><?php print $item->time4 ?></td>
                        <td><?php print $item->time5 ?></td>
                        <td>
                            <?php if ($item->status == 0) : ?>
                                <select name="status-<?php print $item->id ?>">
                                    <option value="0">Đang xử lý</option>
                                    <option value="1">Hoàn thành</option>
                                </select>
                            <?php else : ?>
                                <select style="background-color: green;color:white" disabled name="status-<?php print $item->id ?>">
                                    <option value="1">Hoàn thành</option>
                                </select>
                            <?php endif ?>

                        </td>
                        <td>
                            <div style="display: inline-flex">
                                <div style="padding-right: 5px;">
                                    <button onclick='showModalEdit(<?php print json_encode($item); ?>)' class="btn btn-success btn-sm"><?php _e('Sửa'); ?></button>
                                </div>
                                <div>
                                    <a class="btn btn-danger btn-sm" href="javascript:delete_bag('<?php print $item->id ?>');">Xoá</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        <?php endif; ?>
    </table>
</div>
<textarea name="" id="scan" cols="30" rows="10"></textarea>

<script>
    let code = "";
    let reading = false;
    document.addEventListener('keypress', e => {
        //usually scanners throw an 'Enter' key at the end of read
        if (e.keyCode === 13) {
            if (code.length > 0) {
                console.log(code);
                code += " ;"
                /// code ready to use                
            }
        } else {
            code += e.key; //while this is not an 'enter' it stores the every key            
        }
        console.log(code)

        //run a timeout of 200ms at the first read and clear everything
        // if (!reading) {
        //     reading = true;
        //     setTimeout(() => {
        //         code = "";
        //         reading = false;
        //     }, 200);
        // } 

    })
</script>