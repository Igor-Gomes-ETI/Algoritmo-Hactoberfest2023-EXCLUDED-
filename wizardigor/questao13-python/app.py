from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        # Obtem os valores do formulário
        codigo = request.form['codigo']
        nota1 = float(request.form['nota1'])
        nota2 = float(request.form['nota2'])
        nota3 = float(request.form['nota3'])

        # Calcula a média ponderada
        maior_nota = max(nota1, nota2, nota3)
        media = (nota1 * 3 + nota2 * 3 + nota3 * 4) / 10

        # Determina se foi aprovado ou reprovado
        status = "APROVADO" if media >= 5 else "REPROVADO"

        return render_template('resultado.html', codigo=codigo, nota1=nota1, nota2=nota2, nota3=nota3, media=media, status=status)

    return render_template('index.html')

if __name__ == '__main__':
    app.run(debug=True)
