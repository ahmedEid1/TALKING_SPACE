
<?php include("include/header.php"); ?>
                    <ul id="topics">

                      <?php if($topics): ?>
                      <?php foreach ($topics as $topic) { ?>
                      <li class="topic">
                        <div class="row">
                          <div class="col-md-2">
                            <img src="images/avatars/<?php echo $topic->avater; ?>" class="avatar pull-left">
                          </div>
                          <div class="col-md-10">
                            <div class="topic-content pull-right">
                              <h3><a href="topic.php?id=<?php echo $topic->id; ?>"><?php echo $topic->title; ?></a></h3>
                              <div class="topic-info">
                                <a href="$topics.php?catagory=<?php echo urlencode($topic->catagory_id)?>"><?php echo $topic->name; ?></a> >>
                                <a href="topics.php?user=<?php echo urlencode($topic->user_id); ?>"><?php echo $topic->username; ?></a>
                                >> <?php echo format_date($topic->create_date); ?>
                                <span class="badge pull-right"><?php echo replay_count($topic->id); ?></span>
                              </div>
                            </div>

                          </div>

                        </div>

                      </li>
                    <?php } ?>
                    </ul>
                  <?php else : ?>
                    <p>no topics to display</p>
                  <?php endif; ?>
                    <h3>Form staticses</h3>
                    <ul>
                      <li>Total number of users <strong><?php echo $total_users; ?></strong></li>
                      <li>Total number of topic <strong><?php echo  $total_topics; ?></strong></li>
                      <li>Total number of catagories <strong><?php echo $total_catagories; ?></strong></li>
                    </ul>
<?php include("include/footer.php"); ?>
