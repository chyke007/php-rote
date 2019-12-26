<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <nav></nav>
    <main>
        

       <div class="all">
       <h1> Get the list of all students</h1>

        <form action="" method="post">
         <select name="category">
                    <option name="all">
                    All
                    </option>
         </select>
        <input type="button" id="submit" value="Get value" />
         <br/><br/> <div id="result">
                 Result will be shown below
         <br/></div>
       </form>
       </div>

       <div class="list_by_category">
       <h1> Get the list of all students based on their category</h1>


       
            <form action="" method="post">
                <select id="category">
                
                
              
                     <option name="science">science</option>
                     <option name="commercial">commercial</option>
                     <option name="art">art</option>                     
                   
                </select>

                <input type="button" id="submit2" value="Submit" />

                <br/><br/>
                <div id="result2">

                    Results will be shown here
                    <br>
                </div>
                
            </form>
        
        </div>

        <div class="count_by_category">
       <h1> Get the count of all students based on their category</h1>


       
            <form action="" method="post">
                <select id="category2">
                
                
              
                     <option name="science">science</option>
                     <option name="commercial">commercial</option>
                     <option name="art">art</option>                     
                   
                </select>

                <input type="button" id="submit3" value="Submit" />

                <br/><br/>
                <div id="result3">

                    Results will be shown here
                    <br>
                </div>
                
            </form>
        
        </div>
    </main>

    <script>
        var el = document.getElementById('submit');
        var res = document.getElementById('result');
        var red = '';
        el.addEventListener('click', function () {

            red = '';

            var hr = new XMLHttpRequest();
            hr.open("GET", "/php-route/api/all", true);
            hr.setRequestHeader("Content-type", "application/json");
            hr.onreadystatechange = function () {
                if (hr.readyState == 4 && hr.status == 200) {
                    console.log(hr.responseText);
                    var result = JSON.parse(hr.responseText).data;
                    for (var j = 0; j < result.length; j++) {
                        red += (j + 1) + ')' +
                            ' Name:' + result[j].split(',')[0] + ' Centre:' + result[j].split(',')[1] +
                            '<br/>';
                    }
                    res.innerHTML = red;

                }
            }
            hr.send();

        })

        var el = document.getElementById('submit2');
        var res2 = document.getElementById('result2');
        var cat = document.getElementById('category');
        var red = '';
        el.addEventListener('click', function () {

            res2.innerHTML,red = '';
            var hr = new XMLHttpRequest();
            hr.open("POST", `/php-route/api/listbycat?category=${cat.value}`, true);
            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if (hr.readyState == 4 && hr.status == 200) {
                    console.log(hr.responseText);
                    var result = JSON.parse(hr.responseText).data;
                    for (var j = 0; j < result.length; j++) {
                        red += (j + 1) + ')' +
                            ' Name:' + result[j] + '<br/>';
                    }
                    res2.innerHTML = red;

                }
            }
            hr.send();


        })

        var el = document.getElementById('submit3');
        var res3 = document.getElementById('result3');
        var cat = document.getElementById('category2');
        var red = '';
        el.addEventListener('click', function () {

            res3.innerHTML,red = '';
            var hr = new XMLHttpRequest();
            hr.open("POST", `/php-route/api/countbycat?category=${cat.value}`, true);
            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if (hr.readyState == 4 && hr.status == 200) {
                    console.log(hr.responseText);
                    var result = JSON.parse(hr.responseText).data;
                    
                        red += ' Total:' + result + '<br/>';
                    
                    res3.innerHTML = red;

                }
            }
            hr.send();


        })
    </script>
</body>

</html>