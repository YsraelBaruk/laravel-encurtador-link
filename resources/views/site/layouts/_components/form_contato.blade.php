<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <form action="{{route   ('site.contato')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="mensagem" class="form-label">Mensagem</label>
                    <input type="text" class="form-control" id="mensagem" name="mensagem">
                </div>
                <div class="mb-3">
                    <select class="form-select" id="motivo" name="motivo">
                        <option selected>Qual o motivo de contato?</option>
                        <option value="1">Reclamação</option>
                        <option value="2">Dúvida</option>
                        <option value="3">Elogio</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>