<div class="w-full max-w-md mx-auto py-4 mt-5">
          <table class="bg-green-300 w-full">
            <thead class="bg-green-600">
              <tr>
                <th class="px-4 py-2">Nutriente</th>
                <th class="px-4 py-2">% VD (*)</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $nutrientes = [];

              $stmt = $pdo->prepare("SELECT * FROM nutricionais where product_id = '$idpost2'");
              $stmt->execute();

              if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  $nutricionais = $row;
                }
              }
              ?>
              <tr>
                <td class="px-4 py-2">Valor Energético</td>
                <td class="px-4 py-2"><?php echo $nutricionais['valor_energetico']?></td>
              </tr>
              <tr>
                <td class="px-4 py-2">Carboidratos</td>
                <td class="px-4 py-2"><?php echo $nutricionais['carboidratos']?></td>
              </tr>
              <tr>
                <td class="px-4 py-2">Proteínas</td>
                <td class="px-4 py-2"><?php echo $nutricionais['proteinas']?></td>
              </tr>
              <tr>
                <td class="px-4 py-2">Gorduras totais</td>
                <td class="px-4 py-2"><?php echo $nutricionais['gorduras_totais']?></td>
              </tr>
              <tr>
                <td class="px-4 py-2">Gorduras saturadas</td>
                <td class="px-4 py-2"><?php echo $nutricionais['gorduras_saturadas']?></td>
              </tr>
              <tr>
                <td class="px-4 py-2">Gorduras trans</td>
                <td class="px-4 py-2"><?php echo $nutricionais['gorduras_trans']?></td>
              </tr>
              <tr>
                <td class="px-4 py-2">Fibra alimentar</td>
                <td class="px-4 py-2"><?php echo $nutricionais['fibra_alimentar']?></td>
              </tr>
              <tr>
                <td class="px-4 py-2">Sódio</td>
                <td class="px-4 py-2"><?php echo $nutricionais['sodio']?></td>
              </tr>
              <tr>
                <td class="px-4 py-2">Cálcio</td>
                <td class="px-4 py-2"><?php echo $nutricionais['calcio']?></td>
              </tr>
              <tr>
                <td class="px-4 py-2">Ferro</td>
                <td class="px-4 py-2"><?php echo $nutricionais['ferro']?></td>
              </tr>
            </tbody>
          </table>
        </div>