<!DOCTYPE html>
<html>
<head>
    <title>Meow</title>
    <link rel="stylesheet" src="styles.css"/>
    <script src="scripts.js?v=<$php rand(); $>"></script>
</head>
<body>
     <h1>Colonel's Calculator</h1>

        <p>
            The focus of this lesson is <b>functions</b>. We will use this calculator example to
            explore how functions work, use parameters, return values, and call other functions.
        </p>
        <h2>Area of a Circle</h2>
        <form>
            Radius <input type="text" id="radius" name="radius" />
            <br />
             <button type="button" onclick="circle()">Area of a Circle</button>
        </form>

        Result: <span id="result"></span>
        <h2>Area of a Rectangle</h2>
        <form>
            Height: <input type="text" id="value2" name="value2" />
            <br />
            Width: <input type="text" id="value1" name="value1" />
            <div>
             <button type="button" onclick="rectangle()">Area of a Rectangle</button>
        </form>
        <div>
         Result: <span id="result2"></span>
         <h2>Area of a Triangle</h2>
        <form>
            Height: <input type="text" id="value4" name="value4" />
            <br />
            Base: <input type="text" id="value3" name="value3" />
            <div>
             <button type="button" onclick="triangle()">Area of a Triangle</button>
             <div>
             Result: <span id="result3"></span>
        </form>
</body>
</html>