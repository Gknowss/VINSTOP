<!DOCTYPE html>
<html lang="en"></html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Search</title>
  <link rel="stylesheet" href="homepage.css" />
</head>

<body>

    <h1>Search:</h1>

    <ul></ul> <!-- For use of script to get VIN info -->

     <script>
        //Get URL API for trailer vins and info
        fetch("https://vpic.nhtsa.dot.gov/api/vehicles/decodevinvaluesbatch/")
            .then(res => {return res.json();}) //return info as json
            .then(data => 
                {data.forEach(vin => { 
                    const markup = `<li>${vin.variableid}</li>`;
                
                    document.querySelector('ul').insertAdjacentHTML('beforeend', markup);
                }); //format json and (temporarily, will update later) select all trailers by API value (variableid)
            })
            .catch(error => console.log(error))

            

     </script>

</body>

</html>