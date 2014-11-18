<div class="cell-9 blog-thumbs">
    <h3 class="block-head">أحدث البيانات</h3>
    <table>
        <thead>
            <tr>
                <th>التوقيت</th>
                <th>الخبر</th>
                <th>العملة</th>
                <th>المتوقع</th>
                <th>السابق</th>
                <th>قوة الخبر</th>
            </tr>
        </thead>
        <tbody>
            <?php
            echo empty($all_agenda) ? 'لا يوجد أخبار' : '';
            $i= 1;
            foreach ($all_agenda as $agenda) {
                $color= '';
                if($agenda['impact'] ==1){
                    $color = "<span style='color:red;'>مرتفع</span>";
                }else if($agenda['impact'] ==2){
                    $color = "<span style='color:blue;'>متوسط</span>";
                    
                }else if($agenda['impact'] ==3){
                    $color = "<span style='color:green;'>منخفض</span>";
                    
                }else if($agenda['impact'] ==4){
                    $color = "<span style='color:gray;'>لاتأثير</span>";
                    
                }
                if($i%2 != 0){
                echo '<tr>
                <td>'.$agenda['publish_date'].'</td>
                <td>'.$agenda['news_description'].'</td>
                <td>'.$agenda['currency'].'</td>
                <td>'.$agenda['expected'].'</td>
                <td>'.$agenda['previous'].'</td>
                <td>'.$color.'</td>
                </tr>';
                }else{
                    echo '<tr class="even">
                <td>'.$agenda['publish_date'].'</td>
                <td>'.$agenda['news_description'].'</td>
                <td>'.$agenda['currency'].'</td>
                <td>'.$agenda['expected'].'</td>
                <td>'.$agenda['previous'].'</td>
                <td>'.$color.'</td>
                </tr>';
                }
            }
            ?>
        </tbody>
    </table>
    <div class="clearfix padd-vertical-10"></div>
     <div class="pager skew-25">
        <ul>
            <?= $pageNumber ?>
        </ul>
    </div>
</div>