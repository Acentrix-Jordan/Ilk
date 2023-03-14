<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ilk Task 1</title>
</head>
<body>
    <?php  
        $arr = [];

        for( $i = 1; $i <= 100; $i++ ) {
            $arr[] = $i;
        };
    ?>

    <h1>List 1 - 100</h1>
    <pre>
        <?php print_r( $arr ); ?>
    </pre>
    <h1>Or</h1>
    <?php 
        foreach ( $arr as $key => $value ){
            echo $value . ', ';
        } 
    ?>
    <hr>
    <h1>The Fun Stuff</h1>
    <?php 
        foreach( $arr as $key => $value ) {
            switch($value) {
                case $value % 3 == 0 && $value % 5 == 0 :
                    echo 'BingBang, ';
                    break;
                case $value % 3 == 0 :
                    echo 'Bing, ';
                    break;
                case $value % 5 == 0 :
                    echo 'Bang, ';
                    break;
                default:
                    echo $value . ', ';
            }
        }
    ?>
    <p>
        <strong>As per the brief nothing pretty</strong>
    </p>
    <hr>
    <h1>PHP Function</h1>
    <?php
        function bingBang( $min, $max ) {
            $bingBangArr = [];

            for( $i = $min; $i <= $max; $i++ ) {
                switch($i) {
                    case $i % 3 == 0 && $i % 5 == 0 :
                        $bingBangArr[] = 'BingBang';
                        break;
                    case $i % 3 == 0 :
                        $bingBangArr[] = 'Bing';
                        break;
                    case $i % 5 == 0 :
                        $bingBangArr[] = 'Bang';
                        break;
                    default:
                        $bingBangArr[] = $i;
                }
            };
            
            return $bingBangArr;
        }
    ?>
    <pre>
        <?php print_r(bingBang(1,4)); ?>
    </pre>
    <hr>
    <h1>JS Function</h1>
    <div id="results"></div>
    <script>
        const bingBang = (min, max) => {
            if(!min || !max) {
                alert('Missing parameters');
                return;
            }

            let bingBangArr = [];

            for(let i = min; i <= max; i++){
                if(i % 3 == 0 && i % 5 == 0) {
                    bingBangArr.push('BingBang');
                } else if(i % 3 == 0) {
                     bingBangArr.push('Bing');
                } else if (i % 5 == 0) {
                    bingBangArr.push('Bang');
                } else {
                     bingBangArr.push(i);
                }
            };

            return bingBangArr;
        }
        
        document.getElementById('results').innerText = bingBang(1, 100)
    </script>
</body>
</html>