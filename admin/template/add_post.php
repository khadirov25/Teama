                <form action="" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data" method="post">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">Title<span class="required">*</span></label>
                            <div class="controls">
                                <input type="text" name="title" data-required="1" class="span6 m-wrap"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Description<span class="required">*</span></label>
                            <div class="controls">
                                <input name="description" type="text" class="span6 m-wrap"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Content<span class="required">*</span></label>
                            <div class="controls">
                                <textarea id="ckeditor_full" name="text" placeholder="Enter text ..."></textarea>
                            </div>
                        </div>


                        <div class="form-actions">
                            <input type="submit" name="add" value="Add"/>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>