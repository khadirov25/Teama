<?php if($post1): // если получены товары категории ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>

                                                <th>Brand_name</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($post1 as $item): ?>
                                            <tr class="odd gradeX">

                                                <td><?=$item['title']?></td>
                                                <td><a href="?view=edit_brand&amp;brand_id=<?=$key?>">Edit</a></td>
                                                <td class="center"><a href="?view=del_post&amp;post_id=<?=$item['id']?>">Delete</a></td>
                                            </tr>

                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <?endif;?>