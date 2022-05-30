  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div style="font-family: 'Poppins';font-weight: 1000;margin-top: 150px;">
        <h3 style="color: #3597D4;font-family: 'Poppins';font-weight: bold;line-height: 50px;text-align: center;font-size: 28px;">Mitra Guru Maungaji</h3>
      </div>
      <div class="new-text">
          <p style="font-size: 20px;line-height: normal;text-align: center; font-family: 'Poppins';">Insya Allah mitra guru ngaji di Maungaji memiliki 3 poin kompetensi yakni <b>Terpercaya, Berpengalaman, dan Terkualifikasi.</b> Maungaji juga membuka kesempatan bagi Guru Ngaji untuk bergabung bersama kami sebagai mitra maungaji.</p>
      </div>
      </br>
      <br> 
      <div class="col-md-12">
      <?php
      
      if($teacher['data']){
          foreach ($teacher['data'] as $key => $list) {
            if($list['teacher']['avatar'] != null){
            ?>
            <?php
            ?>
                <div class="col-sm-6 col-md-4">
                  <div class="card mb-5 mb-lg-0">
                    <div class="card-body">
                      <div class="thumbnail pt-5" style="border-color: #3597d4;border-radius: 32px; border: 2px solid #3597d4;">
                        <?php if($list['teacher']['avatar']): ?>
                          <div
                              class="profile-photo center-block"
                              style="background: url(<?php echo $url .'/'.$list['teacher']['avatar'] ?>"
                              ></div>
                        <?php endif; ?>
                        <div style="text-align: center;display: flex;flex-wrap: wrap;justify-content: center;">
                          <br>
                          <div class="form-group" style="font-family:Poppins;">
                              <?php if($list['teacher']['status_online'] == 1): ?>
                                 <span class="label label-success mb-3 mt-4 p-2 d-inline-block">Online</span>
                              <?php else: ?>
                                 <span class="label label-warning mb-3 mt-4 p-2 d-inline-block">Offline</span>
                              <?php endif; ?>
                              <h4 class="text-center personnel-detail mx-auto" data-toggle="tooltip" data-placement="bottom" title="<?php echo $list['teacher']['name']; ?>"><strong><?php echo $list['teacher']['name']; ?></strong></h4>
                              <div class="col-md-12">
                              <h4 class="text-center personnel-detail mx-auto" data-toggle="tooltip" data-placement="bottom" title="<?php echo $list['teacher']['email']; ?>" style="font-size: 15px;"><i class="fa fa-envelope"></i> <?php echo $list['teacher']['email']; ?></h4>
                              </br>
                              </div>
                              <a href="#aboutModal" data-toggle="modal" data-target="#myModal<?php echo $list['teacher']['id']; ?>" class="btn btn-primary" role="button" style="padding: 15px 30px; background-color: #3597D4; color: #fff; letter-spacing:2px; text-transform: uppercase; font-size: 15px; opacity: 20.7; border-radius: 2rem;">Lihat Detail</a></p>
                          </div>
                          <!-- modal -->
                          <div class="modal fade modal-personnel" id="myModal<?php echo $list['teacher']['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                  <div class="modal-header p-5" style="background: #3597D4;">
                                    <button type="button" class="btn btn-default position-absolute btn-close-modal" style="background: #FF4D35; color: white;" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                    <div class="row">
                                      <div class="col-md-4">
                                          <h4 class="modal-title">
                                          <?php if($list['teacher']['avatar']): ?>
                                              <div
                                              class="profile-photo center-block"
                                              style="background: url(<?php echo $url .'/'.$list['teacher']['avatar'] ?>"
                                              ></div>
                                          <?php endif; ?>
                                          </h4>
                                      </div>
                                      <div class="col-md-8 text-left">
                                        <div class="teacher-name-container" style="display: table; height: 200px;">
                                          <h3 style="font-family: Poppins; font-style: normal;font-weight: 600;color: #FFFFFF; display: table-cell; vertical-align: middle; word-break: break-all;" class="modal-title" id="myModalLabel">
                                          <?php echo $list['teacher']['name']; ?>
                                          </h3>
                                        </div>
                                          
                                      </div>
                                    </div>
                                    
                                  </div>
                                  <div class="modal-body p-5">
                                    <div class="row">
                                      <div class="col-md-12" style="margin-top: 20px">
                                        <p style="text-align:center;font-family: Poppins;font-style: normal;font-size: 15px;line-height: 26px;color: #263238;">
                                          <?php echo $list['teacher']['description']; ?>
                                        </p>
                                        <p style="text-align:center;font-family: Poppins;font-style: normal;font-weight: 500;font-size: 14px;line-height: 21px;color: #3B97D3;">
                                          <!--  > -->
                                          <a href="https://linktr.ee/Maungaji" target="_blank">yuk belajar dengan ustadz/ah  <?php echo $list['teacher']['name']; ?> di aplikasi maungaji <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <?php
            }
          }
        }  
      ?>  
      </div>   
    </div>
  </div>
  <br>
  <br>
