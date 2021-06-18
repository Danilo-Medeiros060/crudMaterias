<main>
    
    <section>
        <a href="index.php">
            <button class="btn btn-success"> Voltar </button>
        </a>
    </section>
    
    <h3 class="mt-3"> Cadastrar matéria </h3>
    
    <form method="post">
        
        <div class="form-group">
            <label>Título</label>
            <input type="text" class="form-control" name="Título">
        </div>
        
        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="Descrição" rows="5"> </textarea>
        </div>
        
        <div class="form-group">
            <label>Dificuldade</label>
            
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="facil" value="f"> Fácil
                    </label>
                </div>
                
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="medio" value="m"> Médio
                    </label>
                </div>
                
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="dificil" value="d"> Díficil
                    </label>
                </div>
            </div>
            
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-warning"> Cadastrar </button>
        </div>
        
    </form>
    
</main>