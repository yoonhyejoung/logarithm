<?php

    #Post 방식으로 전달받은 Exponent와 base를 각각 변수에 저장
    $exponent = $_POST['exponent'];
    $base = $_POST['base'];
    #base는 1이 아닌 양수
    #exponent는 > 0

    #일반 로그
    if($base>0 && $base!=1 && $base != 10 && $exponent >0 ){
        $val1=log($exponent, $base);
        printf("밑이 %d 이고 exp가 %d인 로그는 ",$base, $exponent);
        printf($val1);


    #상용 로그 (밑이 10)
    }else if($base==10 && $exponent>0){
        $val1=log($exponent, $base);
        printf("상용 로그<br/>\n");
        printf("base %d 이고 exp가 %d인 로그는 ",$base, $exponent);
        printf($val1);


    
    #자연로그 (밑이 e, 자연상수)    
    }else if($base == 'e' && $exponent>0){
        $val1=log($exponent);
        printf("ln %d은 ", $exponent);
        printf($val1);
    }
    

    #로그의 조건이 맞지 않는 경우
    #다시 입력값을 받을 수 있게 처음 화면으로 이동
    else{
        echo  "<script>alert(\"입력값 오류\");</script>";
?>
        <script>
         document.location.href='logarithm.php';
        </script>
<?php
    }
    
    
?>