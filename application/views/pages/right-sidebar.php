                    <div class="sidebar">
                        <div class="widget-container bbp_widget_login">
                            <div class="title">
                                <p>Login</p>
                            </div>
                            <div class="short-line">
                                <img src="<?= base_url();?>assets/wp-content/themes/ticketlab/images/line.png" class="img-responsive" alt="" />
                            </div>
                            <div class="bbp-logged-in">
                                <a href="https://bigbangthemes.net/TicketLab_WP/forums/user/fb-2269598766500971/" class="submit user-submit">
                                    <?php if($user_detail->profilepic==''){ ?>
                                        <img alt='' src='<?= base_url();?>assets/avtar_demo.png' class='avatar avatar-40 photo' height='40' width='40' />
                                        <?php } else {?>
                                            <img alt='' src='<?= base_url();?>assets/setting/<?= $user_detail->profilepic;?>' class='avatar avatar-40 photo' height='40' width='40' />
                                            <?php } ?>

                                </a>
                                <h4><a href="<?= base_url();?>pages/dashboard" rel="nofollow"><?= $user_detail->name?></a></h4>

                                <a href="<?= base_url();?>pages/logout" class="button logout-link">Log Out</a> </div>

                        </div>
                        <div class="widget-container widget_recent_entries">
                            <div class="title">
                                <p>Recent Posts</p>
                            </div>
                            <div class="short-line">
                                <img src="<?= base_url();?>assets/wp-content/themes/ticketlab/images/line.png" class="img-responsive" alt="" />
                            </div>
                            <ul>
                                <li>
                                    <a href="">What options come with your knowledge base</a>
                                </li>

                            </ul>
                        </div>
                        <div class="widget-container widget-submit-topic">
                            <div class="title">
                                <p>Get Support</p>
                            </div>
                            <div class="short-line">
                                <img src="<?= base_url();?>assets/wp-content/themes/ticketlab/images/line.png" class="img-responsive" alt="" />
                            </div>
                            <a href="<?= base_url();?>pages/enquiry">
                                <button type="submit" class="btn btn-default btn-submit">
                                    Submit Support Ticket </button>
                            </a>

                        </div>

                    </div>