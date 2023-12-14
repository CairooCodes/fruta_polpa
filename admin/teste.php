<div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 pb-6">
            <div class="md:col-span-2 lg:col-span-1">
              <a href="banners.php">
                <div class="h-full py-8 px-6 space-y-6 rounded-xl text-2xl border border-gray-200 bg-color1 text-white">
                  <div class="flex space-x-2">
                    <i class="bi bi-images"></i>
                    <h6>
                      BANNERS
                      <?php
                      $sth = $pdo->prepare("SELECT count(*) as total from banners");
                      $sth->execute();
                      print_r($sth->fetchColumn());
                      ?>
                    </h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="md:col-span-2 lg:col-span-1">
              <a href="trabalhe-conosco.php">
                <div class="h-full py-8 px-6 space-y-6 rounded-xl text-2xl border border-gray-200 bg-color1 text-white">
                  <div class="flex space-x-2">
                    <i class="bi bi-images"></i>
                    <h6>
                      TRABALHE CONOSCO
                      <?php
                      $sth = $pdo->prepare("SELECT count(*) as total from recruitment");
                      $sth->execute();
                      print_r($sth->fetchColumn());
                      ?>
                    </h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="md:col-span-2 lg:col-span-1">
              <a href="servicos.php">
                <div class="h-full py-8 px-6 space-y-6 rounded-xl text-2xl border border-gray-200 bg-color1 text-white">
                  <div class="flex space-x-2">
                    <i class="fas fa-briefcase-medical"></i>
                    <h6>
                      BLOGS
                      <?php
                      $sth = $pdo->prepare("SELECT count(*) as total from blogs");
                      $sth->execute();
                      print_r($sth->fetchColumn());
                      ?>
                    </h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="md:col-span-2 lg:col-span-1">
              <a href="polpas.php">
                <div class="h-full py-8 px-6 space-y-6 rounded-xl text-2xl border border-gray-200 bg-color1 text-white">
                  <div class="flex space-x-2">
                    <i class="bi bi-hospital"></i>
                    <h6>
                      POLPAS
                      <?php
                      $sth = $pdo->prepare("SELECT count(*) as total from products");
                      $sth->execute();
                      print_r($sth->fetchColumn());
                      ?>
                    </h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="md:col-span-2 lg:col-span-1">
              <a href="receitas.php">
                <div class="h-full py-8 px-6 space-y-6 rounded-xl text-2xl border border-gray-200 bg-color1 text-white">
                  <div class="flex space-x-2">
                    <i class="bi bi-hospital"></i>
                    <h6>
                      RECEITAS
                      <?php
                      $sth = $pdo->prepare("SELECT count(*) as total from receitas");
                      $sth->execute();
                      print_r($sth->fetchColumn());
                      ?>
                    </h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="md:col-span-2 lg:col-span-1">
              <a href="leads.php">
                <div class="h-full py-8 px-6 space-y-6 rounded-xl text-2xl border border-gray-200 bg-color1 text-white">
                  <div class="flex space-x-2">
                    <i class="bi bi-hospital"></i>
                    <h6>
                      LEADS
                      <?php
                      $sth = $pdo->prepare("SELECT count(*) as total from leads");
                      $sth->execute();
                      print_r($sth->fetchColumn());
                      ?>
                    </h6>
                  </div>
                </div>
              </a>
            </div>
          </div>