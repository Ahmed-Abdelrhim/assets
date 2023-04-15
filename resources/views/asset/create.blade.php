@extends('main')
@section('content')
    <form action="#" id="formadd" enctype="multipart/form-data" autocomplete="off">
        <div class="modal-header">

            <h5 class="modal-title"><?php echo trans('lang.add_data'); ?></h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <div
                class="display-none messageexist alert alert-success"><?php echo trans('lang.tag_exist'); ?></div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label><?php echo trans('lang.name'); ?></label>
                    <input name="name" type="text" id="name" class=" form-control" required
                           placeholder="<?php echo trans('lang.name');?>"/>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label><?php echo trans('lang.assettag'); ?></label>
                    <input name="assettag" type="text" id="assettag" class=" form-control" required
                           placeholder="<?php echo trans('lang.assettag');?>"/>
                </div>
                <div class="form-group col-md-6">
                    <label><?php echo trans('lang.supplier'); ?></label>
                    <select name="supplierid" id="supplierid" required class="form-control">
                        <option value=""><?php echo trans('lang.supplier'); ?></option>
                    </select>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label><?php echo trans('lang.location'); ?></label>
                    <select name="locationid" id="locationid" required class="form-control">
                        <option value=""><?php echo trans('lang.location'); ?></option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label><?php echo trans('lang.brand'); ?></label>
                    <select name="brandid" id="brandid" required class="form-control">
                        <option value=""><?php echo trans('lang.brand'); ?></option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label><?php echo trans('lang.serial'); ?></label>
                    <input name="serial" type="text" id="serial" class="form-control " required
                           placeholder="<?php echo trans('lang.serial');?>"/>
                </div>
                <div class="form-group col-md-6">
                    <label><?php echo trans('lang.assettype'); ?></label>
                    <select name="typeid" id="typeid" required class="form-control">
                        <option value=""><?php echo trans('lang.assettype'); ?></option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 mb-0">
                    <label for="cost" class="control-label"><?php echo trans('lang.cost'); ?></label>
                    <div class="input-group mb-0">
                        <span class="input-group-addon setcurrency border-1" id="currency"></span>
                        <input class="form-control number" required=""
                               placeholder="<?php echo trans('lang.cost');?>" id="cost" name="cost"
                               type="text">
                    </div>
                    <label class="error" for="cost"></label>
                </div>
                <div class="form-group col-md-6 mb-0">
                    <label for="purchasedate"
                           class="control-label"><?php echo trans('lang.purchasedate'); ?></label>
                    <div class="input-group mb-0">
                        <input class="form-control setdate" required=""
                               placeholder="<?php echo trans('lang.purchasedate');?>" id="purchasedate"
                               name="purchasedate" type="text">
                        <span class="input-group-addon border-1" id="date"><i
                                class="fa fa-calendar"></i></span>
                    </div>
                    <label class="error" for="purchasedate"></label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 mb-0">
                    <label for="warranty"
                           class="control-label"><?php echo trans('lang.warranty'); ?></label>
                    <div class="input-group mb-0">
                        <input class="form-control number" required=""
                               placeholder="<?php echo trans('lang.warranty');?>" id="warranty"
                               name="warranty" type="text">
                        <span class="input-group-addon border-1"
                              id="warrantyyear"><?php echo trans('lang.month'); ?></span>
                    </div>
                    <label class="error" for="warranty"></label>
                </div>
                <div class="form-group col-md-6 mb-0">
                    <label><?php echo trans('lang.status'); ?></label>
                    <select name="status" id="status" required class="form-control">
                        <option value=""><?php echo trans('lang.status'); ?></option>
                        <option value="1"><?php echo trans('lang.readytodeploy'); ?></option>
                        <option value="2"><?php echo trans('lang.pending'); ?></option>
                        <option value="3"><?php echo trans('lang.archived'); ?></option>
                        <option value="4"><?php echo trans('lang.broken'); ?></option>
                        <option value="5"><?php echo trans('lang.lost'); ?></option>
                        <option value="6"><?php echo trans('lang.outofrepair'); ?></option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label><?php echo trans('lang.description'); ?></label>
                <textarea class="form-control" name="description" id="description"
                          placeholder="<?php echo trans('lang.description');?>"></textarea>
            </div>

            <div class="form-group">
                <label><?php echo trans('lang.picture'); ?></label>
                <input name="picture" type="file" id="picture" class=" form-control"
                       placeholder="<?php echo trans('lang.picture');?>"/>
            </div>


        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary"
                    id="save"><?php echo trans('lang.save'); ?></button>
            <button type="button" class="btn btn-default"
                    data-dismiss="modal"><?php echo trans('lang.close'); ?></button>
        </div>
    </form>

@endsection
