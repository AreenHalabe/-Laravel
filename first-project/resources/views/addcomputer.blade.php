<!DOCTPE html>
<html>
<head>
<title>View computers Records</title>
</head>
    <body>
    <div>
        <form action = "/create" method = "post"  style="width:70%; margin-left:15%;" >
        @csrf    
        <div>
            <Label> Computer-name </Label>
            <input type="text" name="name"/>
            </div>

            <div>
            <Label> Computer-price </Label>
            <input type="number" name="price"/>
            </div>

            <div>
            <button type="submit"  value = "Add student" >Submit</button>
            </div>
        </form>
    </div>
        


    </body>
</html>