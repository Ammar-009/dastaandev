<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5><?php echo $this->lang->line('Customer') . ' ' . $this->lang->line('Stock Return') ?> <a
                        href="<?php echo base_url('stockreturn/create_client') ?>"
                        class="btn btn-primary btn-sm rounded">
                    <?php echo $this->lang->line('Add new') ?>
                </a></h5>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div class="card-body">




                    <table id="invoices_r" class="table table-striped table-bordered zero-configuration">
                        <thead>
                        <tr>
                            <th><?php echo $this->lang->line('No') ?></th>
                            <th>Order #</th>
                            <th><?php echo $this->lang->line('Customer') ?></th>
                            <th><?php echo $this->lang->line('Date') ?></th>
                            <th><?php echo $this->lang->line('Amount') ?></th>
                            <th><?php echo $this->lang->line('Status') ?></th>
                            <th class="no-sort"><?php echo $this->lang->line('Settings') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>

                        <tfoot>
                        <tr>
                            <th><?php echo $this->lang->line('No') ?></th>
                            <th>Order #</th>
                            <th><?php echo $this->lang->line('Customer') ?></th>
                            <th><?php echo $this->lang->line('Date') ?></th>
                            <th><?php echo $this->lang->line('Amount') ?></th>
                            <th><?php echo $this->lang->line('Status') ?></th>
                            <th class="no-sort"><?php echo $this->lang->line('Settings') ?></th>
                        </tr>
                        </tfoot>
                    </table>

            </div>


        </div>
        <div id="delete_model" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><?php echo $this->lang->line('Delete Order') ?></h4>
                    </div>
                    <div class="modal-body">
                        <p><?php echo $this->lang->line('delete this order') ?></p>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="object-id" value="">
                        <input type="hidden" id="action-url" value="stockreturn/delete_i">
                        <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete-confirm">Delete
                        </button>
                        <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {

                var table = $('#invoices_r').DataTable({
                    "processing": true,
                    "serverSide": true,
                    responsive: true,
                    "order": [],
                    "ajax": {
                        "url": "<?php echo site_url('stockreturn/ajax_list?t=1')?>",
                        "type": "POST",
                        'data': {'<?=$this->security->get_csrf_token_name()?>': crsf_hash}
                    },
                    "columnDefs": [
                        {
                            "targets": [0],
                            "orderable": false,
                        },
                    ],

                });

            });
        </script>