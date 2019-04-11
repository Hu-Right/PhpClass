
<?php
/**
*关于常用的php函数方法类总结
*/
####
#1.时间类函数 常用时间戳来计算 对比时间相差 几天，还剩，倒计时，统计，等应用场景 
#2.时间类函数 strtotiome() 最为常见 liunx系统下时间通常是以每毫秒进行
####
#设置时区date_default_timezone_set('Asia/Shanghai');
####
  date_dafault_timezone_set('Asia/Shanghai');
  function data_time(){
      $now_time = time();//当前时间戳函数
      $end_time = strtotime('+5second')//当前结束时间戳上+5秒数
       //判读两时间戳的大小
        if($now_time < $end_time){
          $star_time = $now_time;
          $ends_time = $end_time;
        }else{
          $star_time = $end_time;
          $ends_time = $now_time;  
        }
      //计算天数；
       $day_time    =   $ends_time - $star_time;
       $days        =   intval($day_time/86400);//86400/24小时
       //计算小时数
       $remain      =   $day_time%86400;
       $hours       =   intval($remain/3600);//3600 /2/h
       //计算分钟
       $remains     =   $remain%3600;//2分钟
       $mins        =   intval($remain/60);//分钟 
       //计算秒数
       $secs        =  $remains%60;   
    return  res     = [
            'day'   =>$days,
            'hours' =>$hours,
             'mins' =>$mins,
             'secs' =>$secs 
    ];
  }
print_r(data_time());
?>



