<link rel="stylesheet" href="index.css" />
<style>
    body{
        background-color: gray;
    }
    .main{
        background-color: white;
    }
</style>
<body>
    <div class="main">
        <fieldset>
            <legend>Inrmacion: </legend>
            <p> nombre <input type="text" name="nombre">
            <p> direccion <input type="passwoed">
            <p> telefono <input type="telf">
            <br />
            <br />
            <br />
            <input type="submit">     
            <br />
            <br />
            <br />
            <textarea col="50" rows="30" placeholder="asadad" autocomplete="on off" autofocus required></textarea>
            <br />
            <br />
            <br />
            <label for="">Numero (min -10, maz10): ></label>
           <input type="number" name="number" min="10" max="10" value="0" />
            <br />
            <br />
            <br />
            <form action="/action_page.php">
            <form action="/action_page.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            <input type="submit">
            </form>
            <select multiple>
                <optgroup label="personas">
                    <option value="juan">juan</option>
                    <option value="pedro">pedro</option>
                </optgroup>
                <optgroup label="objetos">
                    <option value="mesa">mesa</option>
                    <option value="silla">silla</option>
                </optgroup> 
            </select><br /> <br /> <br />
            <input type="tel"/> <br /> <br /> <br />
            <input type="url" name ="url_control"/><br /> <br /> <br />
            <input type="color" name ="color_control"/><br /> <br /> <br />
        </fieldset>
    </div>
</body>