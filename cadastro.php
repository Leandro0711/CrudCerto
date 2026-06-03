<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
         * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e293b, #334155);
            padding: 20px;
        }

        form {
            width: 100%;
            max-width: 500px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            padding: 35px;
            border-radius: 20px;
            box-shadow:
                0 10px 30px rgba(0,0,0,0.4),
                0 0 20px rgba(59,130,246,0.3);
            border: 1px solid rgba(255,255,255,0.1);
        }

        h2 {
            text-align: center;
            color: white;
            margin-bottom: 25px;
            font-size: 2rem;
            letter-spacing: 1px;
        }

        .campo {
            margin-bottom: 20px;
        }

        label {
            display: block;
            color: #e2e8f0;
            font-weight: 600;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 14px;
            border: 2px solid transparent;
            border-radius: 12px;
            background: rgba(255,255,255,0.12);
            color: white;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input::placeholder {
            color: rgba(255,255,255,0.6);
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #3b82f6;
            background: rgba(255,255,255,0.18);
            box-shadow: 0 0 15px rgba(59,130,246,0.5);
        }

        select option {
            color: #000;
        }

        button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(45deg, #2563eb, #06b6d4);
            color: white;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(37,99,235,0.4);
        }

        button:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>
    <form action="" method="POST">

    <div class="campo">
            <label for="nome">Nome do Aluno</label>
            <input type="text" id="nome" name="nome">
        </div>

        <div class="campo">
            <label for="turma">Turma</label>
            <input type="text" id="turma" name="turma" >
        </div>

        <div class="campo">
            <label for="sala">Sala</label>
            <input type="text" id="sala" name="sala" >
        </div>

        <div class="campo">
            <label for="periodo">Período</label>
            <input type="text" id = "periodo" name = "periodo">
        </div>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>

    