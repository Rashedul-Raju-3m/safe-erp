
<?php
use App\Modules\User\Models\User;
  
?>
<!-- Main content -->
    <section class="">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                {{-- <ul class="nav nav-pills">
                  <li class="nav-item"><a style="background-color: #dadbd5;color: #000;font-size: 15px;font-weight: bold;" class="nav-link active" href="#activity" data-toggle="tab">Deposite Activity</a></li>
                </ul> --}}
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <div class="box-body table-responsive no-padding">

              <table  id="example1" class="table table-bordered table-striped text-center">
               
                <thead>

                <tr>
                
                  
                  <th>  </th>
                  <th> 2019 </th>
                  <th> 2020 </th>
                  <th> 2021 </th>
                  <th> 2022</th>
                  <th> 2023 </th>
                  <th> 2024 </th>
                  <th> 2025 </th>
                  <th> Total </th>
                </tr>
                </thead>
<tbody>
  
<tr>
  <td style="padding: 3px;"><b>Registration</b></td>
  <td style="padding: 3px;">
    <?php
      $total_2019 = 0;
      $Registration = 0;
    ?>
      @if(isset($deposite2019))
        @foreach ($deposite2019 as $element)
          @if ($element->type == 'Registration')
            {{ $element->amount }}
            <?php 
              $total_2019 = $total_2019+$element->amount;
              $Registration = $Registration+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
    <?php
      $total_2020 = 0;
    ?>
      @if(isset($deposite2020))
        @foreach ($deposite2020 as $element)
          @if ($element->type == 'Registration')
            {{ $element->amount }}
            <?php 
              $total_2020 = $total_2020+$element->amount;
              $Registration = $Registration+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
    <?php
      $total_2021 = 0;
    ?>
      @if(isset($deposite2021))
        @foreach ($deposite2021 as $element)
          @if ($element->type == 'Registration')
            {{ $element->amount }}
            <?php 
            $Registration = $Registration+$element->amount;
            $total_2021 = $total_2021+$element->amount;?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
    <?php
      $total_2022 = 0;
    ?>
      @if(isset($deposite2022))
        @foreach ($deposite2022 as $element)
          @if ($element->type == 'Registration')
            {{ $element->amount }}
            <?php 
            $Registration = $Registration+$element->amount;
            $total_2022 = $total_2022+$element->amount;?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
    <?php
      $total_2023 = 0;
    ?>
      @if(isset($deposite2023))
        @foreach ($deposite2023 as $element)
          @if ($element->type == 'Registration')
            {{ $element->amount }}
            <?php 
              $Registration = $Registration+$element->amount;
            $total_2023 = $total_2023+$element->amount;?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
    <?php
      $total_2024 = 0;
    ?>
      @if(isset($deposite2024))
        @foreach ($deposite2024 as $element)
          @if ($element->type == 'Registration')
            {{ $element->amount }}
            <?php 
              $Registration = $Registration+$element->amount;
            $total_2024 = $total_2024+$element->amount;?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
    <?php
      $total_2025 = 0;
    ?>
      @if(isset($deposite2025))
        @foreach ($deposite2025 as $element)
          @if ($element->type == 'Registration')
            {{ $element->amount }}
            <?php 
              $Registration = $Registration+$element->amount;
            $total_2025 = $total_2025+$element->amount;?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>
  <td style="padding: 3px;background-color: #18666f;color: #fff;font-weight: bold;">
    {{ $Registration }}
  </td>
</tr>

<tr>
  <td style="padding: 3px;"><b>January</b></td>
  <td style="padding: 3px;">
      @if(isset($deposite2019))
        @foreach ($deposite2019 as $element)
          @if ($element->month == 'January' && $element->type == 'Monthly')
            {{ $element->amount }}
      <?php 
        $January_total = 0;
        $total_2019 = $total_2019+$element->amount;
        $January_total = $January_total+$element->amount;
      ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2020))
        @foreach ($deposite2020 as $element)
          @if ($element->month == 'January' && $element->type == 'Monthly')
      <?php 
        $total_2020 = $total_2020+$element->amount;
        $January_total = $January_total+$element->amount;
      ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2021))
        @foreach ($deposite2021 as $element)
          @if ($element->month == 'January' && $element->type == 'Monthly')
            {{ $element->amount }}
        <?php 
          $total_2021 = $total_2021+$element->amount;
          $January_total = $January_total+$element->amount;
        ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2022))
        @foreach ($deposite2022 as $element)
          @if ($element->month == 'January' && $element->type == 'Monthly')
            {{ $element->amount }}
        <?php 
          $total_2022 = $total_2022+$element->amount;
          $January_total = $January_total+$element->amount;
        ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2023))
        @foreach ($deposite2023 as $element)
          @if ($element->month == 'January' && $element->type == 'Monthly')
            {{ $element->amount }}
      <?php 
        $total_2023 = $total_2023+$element->amount;
        $January_total = $January_total+$element->amount;
      ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2024))
        @foreach ($deposite2024 as $element)
          @if ($element->month == 'January' && $element->type == 'Monthly')
            {{ $element->amount }}
        <?php 
          $total_2024 = $total_2024+$element->amount;
          $January_total = $January_total+$element->amount;
        ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2025))
        @foreach ($deposite2025 as $element)
          @if ($element->month == 'January' && $element->type == 'Monthly')
            {{ $element->amount }}
        <?php 
          $total_2025 = $total_2025+$element->amount;
          $January_total = $January_total+$element->amount;
        ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>
  <td style="padding: 3px;background-color: #18666f;color: #fff;font-weight: bold;">{{ $January_total }}</td>
</tr>
<tr>
  <td style="padding: 3px;"><b>February</b></td>
  <td style="padding: 3px;">
      @if(isset($deposite2019))
        @foreach ($deposite2019 as $element)
          @if ($element->month == 'February' && $element->type == 'Monthly')
            {{ $element->amount }}
    <?php 
      $February_total = 0;
      $total_2019 = $total_2019+$element->amount;
      $February_total = $February_total+$element->amount;
    ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2020))
        @foreach ($deposite2020 as $element)
          @if ($element->month == 'February' && $element->type == 'Monthly')
            {{ $element->amount }}
        <?php 
          $February_total = $February_total+$element->amount;
          $total_2020 = $total_2020+$element->amount;
        ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2021))
        @foreach ($deposite2021 as $element)
          @if ($element->month == 'February' && $element->type == 'Monthly')
            {{ $element->amount }}
        <?php 
          $February_total = $February_total+$element->amount;
          $total_2021 = $total_2021+$element->amount;
        ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2022))
        @foreach ($deposite2022 as $element)
          @if ($element->month == 'February' && $element->type == 'Monthly')
            {{ $element->amount }}
        <?php 
          $February_total = $February_total+$element->amount;
          $total_2022 = $total_2022+$element->amount;
        ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2023))
        @foreach ($deposite2023 as $element)
          @if ($element->month == 'February' && $element->type == 'Monthly')
            {{ $element->amount }}
        <?php 
          $February_total = $February_total+$element->amount;
          $total_2023 = $total_2023+$element->amount;
        ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2024))
        @foreach ($deposite2024 as $element)
          @if ($element->month == 'February' && $element->type == 'Monthly')
            {{ $element->amount }}
        <?php 
          $February_total = $February_total+$element->amount;
          $total_2024 = $total_2024+$element->amount;
        ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2025))
        @foreach ($deposite2025 as $element)
          @if ($element->month == 'February' && $element->type == 'Monthly')
            {{ $element->amount }}
      <?php 
        $February_total = $February_total+$element->amount;
        $total_2025 = $total_2025+$element->amount;
      ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>
  <td style="padding: 3px;background-color: #18666f;color: #fff;font-weight: bold;">{{ $February_total }}</td>
</tr>

<tr>
  <td style="padding: 3px;"><b>March</b></td>
  <td style="padding: 3px;">
      @if(isset($deposite2019))
        @foreach ($deposite2019 as $element)
          @if ($element->month == 'March' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $March_total = 0;
              $total_2019 = $total_2019+$element->amount;
              $March_total = $March_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2020))
        @foreach ($deposite2020 as $element)
          @if ($element->month == 'March' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $March_total = $March_total+$element->amount;
              $total_2020 = $total_2020+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2021))
        @foreach ($deposite2021 as $element)
          @if ($element->month == 'March' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2021 = $total_2021+$element->amount;
              $March_total = $March_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2022))
        @foreach ($deposite2022 as $element)
          @if ($element->month == 'March' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2022 = $total_2022+$element->amount;
              $March_total = $March_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2023))
        @foreach ($deposite2023 as $element)
          @if ($element->month == 'March' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2023 = $total_2023+$element->amount;
              $March_total = $March_total+$element->amount;

            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2024))
        @foreach ($deposite2024 as $element)
          @if ($element->month == 'March' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2024 = $total_2024+$element->amount;
              $March_total = $March_total+$element->amount;

            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2025))
        @foreach ($deposite2025 as $element)
          @if ($element->month == 'March' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2025 = $total_2025+$element->amount;
              $March_total = $March_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>
  <td  style="padding: 3px;background-color: #18666f;color: #fff;font-weight: bold;">{{ $March_total }}</td>
</tr>

<tr>
  <td style="padding: 3px;"><b>April</b></td>
  <td style="padding: 3px;">
      @if(isset($deposite2019))
        @foreach ($deposite2019 as $element)
          @if ($element->month == 'April' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $April_total = 0;
              $total_2019 = $total_2019+$element->amount;
              $April_total = $April_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2020))
        @foreach ($deposite2020 as $element)
          @if ($element->month == 'April' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2020 = $total_2020+$element->amount;
              $April_total = $April_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2021))
        @foreach ($deposite2021 as $element)
          @if ($element->month == 'April' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2021 = $total_2021+$element->amount;
              $April_total = $April_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2022))
        @foreach ($deposite2022 as $element)
          @if ($element->month == 'April' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2022 = $total_2022+$element->amount;
              $April_total = $April_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2023))
        @foreach ($deposite2023 as $element)
          @if ($element->month == 'April' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2023 = $total_2023+$element->amount;
              $April_total = $April_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2024))
        @foreach ($deposite2024 as $element)
          @if ($element->month == 'April' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2024 = $total_2024+$element->amount;
              $April_total = $April_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2025))
        @foreach ($deposite2025 as $element)
          @if ($element->month == 'April' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $April_total = $April_total+$element->amount;
              $total_2025 = $total_2025+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>
  <td  style="padding: 3px;background-color: #18666f;color: #fff;font-weight: bold;">{{ $April_total }}</td>
</tr>

<tr>
  <td style="padding: 3px;"><b>May</b></td>
  <td style="padding: 3px;">
      @if(isset($deposite2019))
        @foreach ($deposite2019 as $element)
          @if ($element->month == 'May' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $May_total = 0;
              $total_2019 = $total_2019+$element->amount;
              $May_total = $May_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2020))
        @foreach ($deposite2020 as $element)
          @if ($element->month == 'May' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2020 = $total_2020+$element->amount;
              $May_total = $May_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2021))
        @foreach ($deposite2021 as $element)
          @if ($element->month == 'May' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2021 = $total_2021+$element->amount;
              $May_total = $May_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>
  
  <td style="padding: 3px;">
      @if(isset($deposite2022))
        @foreach ($deposite2022 as $element)
          @if ($element->month == 'May' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2022 = $total_2022+$element->amount;
              $May_total = $May_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2023))
        @foreach ($deposite2023 as $element)
          @if ($element->month == 'May' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2023 = $total_2023+$element->amount;
              $May_total = $May_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2024))
        @foreach ($deposite2024 as $element)
          @if ($element->month == 'May' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2024 = $total_2024+$element->amount;
              $May_total = $May_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2025))
        @foreach ($deposite2025 as $element)
          @if ($element->month == 'May' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2025 = $total_2025+$element->amount;
              $May_total = $May_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>
  <td  style="padding: 3px;background-color: #18666f;color: #fff;font-weight: bold;">{{ $May_total }}</td>

</tr>

<tr>
  <td style="padding: 3px;"><b>June</b></td>
  <td style="padding: 3px;">
      @if(isset($deposite2019))
        @foreach ($deposite2019 as $element)
          @if ($element->month == 'June' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $June_total = 0;
              $total_2019 = $total_2019+$element->amount;
              $June_total = $June_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2020))
        @foreach ($deposite2020 as $element)
          @if ($element->month == 'June' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2020 = $total_2020+$element->amount;
              $June_total = $June_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2021))
        @foreach ($deposite2021 as $element)
          @if ($element->month == 'June' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2021 = $total_2021+$element->amount;
              $June_total = $June_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>
  
  <td style="padding: 3px;">
      @if(isset($deposite2022))
        @foreach ($deposite2022 as $element)
          @if ($element->month == 'June' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2022 = $total_2022+$element->amount;
              $June_total = $June_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2023))
        @foreach ($deposite2023 as $element)
          @if ($element->month == 'June' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2023 = $total_2023+$element->amount;
              $June_total = $June_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2024))
        @foreach ($deposite2024 as $element)
          @if ($element->month == 'June' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2024 = $total_2024+$element->amount;
              $June_total = $June_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2025))
        @foreach ($deposite2025 as $element)
          @if ($element->month == 'June' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2025 = $total_2025+$element->amount;
              $June_total = $June_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>
  <td  style="padding: 3px;background-color: #18666f;color: #fff;font-weight: bold;">{{ $June_total }}</td>
</tr>

<tr>
  <td style="padding: 3px;"><b>July</b></td>
  <td style="padding: 3px;">
      @if(isset($deposite2019))
        @foreach ($deposite2019 as $element)
          @if ($element->month == 'July' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php
              $July_total = 0;
              $total_2019 = $total_2019+$element->amount;
              $July_total = $July_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2020))
        @foreach ($deposite2020 as $element)
          @if ($element->month == 'July' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2020 = $total_2020+$element->amount;
              $July_total = $July_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2021))
        @foreach ($deposite2021 as $element)
          @if ($element->month == 'July' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2021 = $total_2021+$element->amount;
              $July_total = $July_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2022))
        @foreach ($deposite2022 as $element)
          @if ($element->month == 'July' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2022 = $total_2022+$element->amount;
              $July_total = $July_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2023))
        @foreach ($deposite2023 as $element)
          @if ($element->month == 'July' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2023 = $total_2023+$element->amount;
              $July_total = $July_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2024))
        @foreach ($deposite2024 as $element)
          @if ($element->month == 'July' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2024 = $total_2024+$element->amount;
              $July_total = $July_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2025))
        @foreach ($deposite2025 as $element)
          @if ($element->month == 'July' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2025 = $total_2025+$element->amount;
              $July_total = $July_total+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>
  <td  style="padding: 3px;background-color: #18666f;color: #fff;font-weight: bold;">{{ $July_total }}</td>
</tr>

<tr>
  <td style="padding: 3px;"><b>August</b></td>
  <td style="padding: 3px;">
      @if(isset($deposite2019))
        @foreach ($deposite2019 as $element)
          @if ($element->month == 'August' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $August_total = 0;
              $total_2019 = $total_2019+$element->amount;
              $August_total = $August_total+$element->amount;?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2020))
        @foreach ($deposite2020 as $element)
          @if ($element->month == 'August' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2020 = $total_2020+$element->amount;
              $August_total = $August_total+$element->amount;?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2021))
        @foreach ($deposite2021 as $element)
          @if ($element->month == 'August' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2021 = $total_2021+$element->amount;
              $August_total = $August_total+$element->amount;?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2022))
        @foreach ($deposite2022 as $element)
          @if ($element->month == 'August' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2022 = $total_2022+$element->amount;
              $August_total = $August_total+$element->amount;?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2023))
        @foreach ($deposite2023 as $element)
          @if ($element->month == 'August' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2023 = $total_2023+$element->amount;
              $August_total = $August_total+$element->amount;?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2024))
        @foreach ($deposite2024 as $element)
          @if ($element->month == 'August' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2024 = $total_2024+$element->amount;
              $August_total = $August_total+$element->amount;?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2025))
        @foreach ($deposite2025 as $element)
          @if ($element->month == 'August' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2025 = $total_2025+$element->amount;
              $August_total = $August_total+$element->amount;?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>
  <td  style="padding: 3px;background-color: #18666f;color: #fff;font-weight: bold;">{{ $August_total }}</td>
</tr>

<tr>
  <td style="padding: 3px;"><b>September</b></td>
  <td style="padding: 3px;">
      @if(isset($deposite2019))
        @foreach ($deposite2019 as $element)
          @if ($element->month == 'September' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $September = 0;
              $total_2019 = $total_2019+$element->amount;
              $September = $September+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2020))
        @foreach ($deposite2020 as $element)
          @if ($element->month == 'September' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2020 = $total_2020+$element->amount;
              $September = $September+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2021))
        @foreach ($deposite2021 as $element)
          @if ($element->month == 'September' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2021 = $total_2021+$element->amount;
              $September = $September+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2022))
        @foreach ($deposite2022 as $element)
          @if ($element->month == 'September' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php
             $total_2022 = $total_2022+$element->amount;
              $September = $September+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2023))
        @foreach ($deposite2023 as $element)
          @if ($element->month == 'September' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2023 = $total_2023+$element->amount;
              $September = $September+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2024))
        @foreach ($deposite2024 as $element)
          @if ($element->month == 'September' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2024 = $total_2024+$element->amount;
              $September = $September+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2025))
        @foreach ($deposite2025 as $element)
          @if ($element->month == 'September' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2025 = $total_2025+$element->amount;
              $September = $September+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>
  <td  style="padding: 3px;background-color: #18666f;color: #fff;font-weight: bold;">{{ $September }}</td>
</tr>

<tr>
  <td style="padding: 3px;"><b>October</b></td>
  <td style="padding: 3px;">
      @if(isset($deposite2019))
        @foreach ($deposite2019 as $element)
          @if ($element->month == 'October' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $October = 0;
              $total_2019 = $total_2019+$element->amount;
              $October = $October+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2020))
        @foreach ($deposite2020 as $element)
          @if ($element->month == 'October' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2020 = $total_2020+$element->amount;
              $October = $October+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2021))
        @foreach ($deposite2021 as $element)
          @if ($element->month == 'October' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2021 = $total_2021+$element->amount;
              $October = $October+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2022))
        @foreach ($deposite2022 as $element)
          @if ($element->month == 'October' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2022 = $total_2022+$element->amount;
              $October = $October+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2023))
        @foreach ($deposite2023 as $element)
          @if ($element->month == 'October' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2023 = $total_2023+$element->amount;
              $October = $October+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2024))
        @foreach ($deposite2024 as $element)
          @if ($element->month == 'October' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2024 = $total_2024+$element->amount;
              $October = $October+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2025))
        @foreach ($deposite2025 as $element)
          @if ($element->month == 'October' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2025 = $total_2025+$element->amount;
              $October = $October+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>
  <td  style="padding: 3px;background-color: #18666f;color: #fff;font-weight: bold;">{{ $October }}</td>
</tr>

<tr>
  <td style="padding: 3px;"><b>November</b></td>
  <td style="padding: 3px;">
      @if(isset($deposite2019))
        @foreach ($deposite2019 as $element)
          @if ($element->month == 'November' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $November = 0;
              $total_2019 = $total_2019+$element->amount;
              $November = $November+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2020))
        @foreach ($deposite2020 as $element)
          @if ($element->month == 'November' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2020 = $total_2020+$element->amount;
              $November = $November+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2021))
        @foreach ($deposite2021 as $element)
          @if ($element->month == 'November' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2021 = $total_2021+$element->amount;
              $November = $November+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2022))
        @foreach ($deposite2022 as $element)
          @if ($element->month == 'November' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2022 = $total_2022+$element->amount;
              $November = $November+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2023))
        @foreach ($deposite2023 as $element)
          @if ($element->month == 'November' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2023 = $total_2023+$element->amount;
              $November = $November+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2024))
        @foreach ($deposite2024 as $element)
          @if ($element->month == 'November' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2024 = $total_2024+$element->amount;
              $November = $November+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2025))
        @foreach ($deposite2025 as $element)
          @if ($element->month == 'November' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2025 = $total_2025+$element->amount;
              $November = $November+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>
  <td  style="padding: 3px;background-color: #18666f;color: #fff;font-weight: bold;">{{ $November }}</td>
</tr>

<tr>
  <td style="padding: 3px;"><b>December</b></td>
  <td style="padding: 3px;">
      @if(isset($deposite2019))
        @foreach ($deposite2019 as $element)
          @if ($element->month == 'December' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $December = 0;
              $total_2019 = $total_2019+$element->amount;
              $December = $December+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2020))
        @foreach ($deposite2020 as $element)
          @if ($element->month == 'December' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2020 = $total_2020+$element->amount;
              $December = $December+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2021))
        @foreach ($deposite2021 as $element)
          @if ($element->month == 'December' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2021 = $total_2021+$element->amount;
              $December = $December+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2022))
        @foreach ($deposite2022 as $element)
          @if ($element->month == 'December' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2022 = $total_2022+$element->amount;
              $December = $December+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2023))
        @foreach ($deposite2023 as $element)
          @if ($element->month == 'December' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2023 = $total_2023+$element->amount;
              $December = $December+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2024))
        @foreach ($deposite2024 as $element)
          @if ($element->month == 'December' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2024 = $total_2024+$element->amount;
              $December = $December+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2025))
        @foreach ($deposite2025 as $element)
          @if ($element->month == 'December' && $element->type == 'Monthly')
            {{ $element->amount }}
            <?php 
              $total_2025 = $total_2025+$element->amount;
              $December = $December+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>
  <td style="padding: 3px;background-color: #18666f;color: #fff;font-weight: bold;">{{ $December }}</td>
</tr>

<tr>
  <td style="padding: 3px;"><b>Yearly</b></td>
  <td style="padding: 3px;">
      @if(isset($deposite2019))
        @foreach ($deposite2019 as $element)
          @if ($element->type == 'Yearly')
            {{ $element->amount }}
            <?php 
              $Yearly = 0;
              $total_2019 = $total_2019+$element->amount;
              $Yearly = $Yearly+$element->amount;
            ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2020))
        @foreach ($deposite2020 as $element)
          @if ($element->type == 'Yearly')
            {{ $element->amount }}
            <?php 
              $total_2020 = $total_2020+$element->amount;
              $Yearly = $Yearly+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2021))
        @foreach ($deposite2021 as $element)
          @if ($element->type == 'Yearly')
            {{ $element->amount }}
            <?php 
              $total_2021 = $total_2021+$element->amount;
              $Yearly = $Yearly+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2022))
        @foreach ($deposite2022 as $element)
          @if ($element->type == 'Yearly')
            {{ $element->amount }}
            <?php 
              $total_2022 = $total_2022+$element->amount;
              $Yearly = $Yearly+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2023))
        @foreach ($deposite2023 as $element)
          @if ($element->type == 'Yearly')
            {{ $element->amount }}
            <?php 
              $total_2023 = $total_2023+$element->amount;
              $Yearly = $Yearly+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2024))
        @foreach ($deposite2024 as $element)
          @if ($element->type == 'Yearly')
            {{ $element->amount }}
            <?php 
              $total_2024 = $total_2024+$element->amount;
              $Yearly = $Yearly+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>

  <td style="padding: 3px;">
      @if(isset($deposite2025))
        @foreach ($deposite2025 as $element)
          @if ($element->type == 'Yearly')
            {{ $element->amount }}
            <?php 
              $total_2025 = $total_2025+$element->amount;
              $Yearly = $Yearly+$element->amount;
              ?>
          @else
            
          @endif
        @endforeach
      @endif
  </td>
  <td style="padding: 3px;background-color: #18666f;color: #fff;font-weight: bold;">{{ $Yearly }}</td>
</tr>


<tr>
  <td><b>Total</b></td>
  <td style="background: #064073;color: #fff;"><b>{{ $total_2019 }}</b></td>
  <td style="background: #064073;color: #fff;"><b>{{ $total_2020 }}</b></td>
  <td style="background: #064073;color: #fff;"><b>{{ $total_2021 }}</b></td>
  <td style="background: #064073;color: #fff;"><b>{{ $total_2022 }}</b></td>
  <td style="background: #064073;color: #fff;"><b>{{ $total_2023 }}</b></td>
  <td style="background: #064073;color: #fff;"><b>{{ $total_2024 }}</b></td>
  <td style="background: #064073;color: #fff;"><b>{{ $total_2025 }}</b></td>
  <td style="background: #064073;color: #fff;"><b>{{ $total_2025+$total_2019+$total_2024+$total_2023+$total_2022+$total_2021+$total_2020 }}</b></td>
</tr>

  {{-- <h3 style="    background-color: #8c0707;
    color: #fff;
    padding: 5px 5px;
    text-align: center;
}"> Has No Deposite !</h3> --}}
</tbody>
              </table>
            </div>
            <!-- /.box-body -->
                    

                    
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>




