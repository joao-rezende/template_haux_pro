<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Formulário</h4>
                <p class="card-category">Formuláro de dados</p>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-5">
                        <div class="form-group">
                            <label class="bmd-label-floating">Campo desativado</label>
                            <input type="text" class="form-control" disabled>
                        </div>
                        </div>
                        <div class="col-md-3">
                        <div class="form-group">
                            <label class="bmd-label-floating">Campo texto</label>
                            <input type="text" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Senha</label>
                            <input type="password" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Campo número</label>
                                <input type="number" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> Campo deschecado
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" checked value="option2"> Campo checado
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline disabled">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled> Campo check disabled
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check form-check-radio form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Campo radio deschecado
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check form-check-radio form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" checked value="option2"> Campo radio checado
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check form-check-radio form-check-inline disabled">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled> Campo radio disabled
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group has-danger">
                                <label class="bmd-label-floating">Input erro</label>
                                <input type="text" value="Valor input" class="form-control" />
                                <span class="material-icons form-control-feedback">clear</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group has-success">
                                <label class="bmd-label-floating">Input sucesso</label>
                                <input type="text" value="Valor input" class="form-control" />
                                <span class="material-icons form-control-feedback">done</span>
                            </div>
                        </div>
                        <div class="col-md-4"><div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-group"></i>
                                </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Input com ícone">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group form-file-upload form-file-simple">
                                <input type="text" class="form-control inputFileVisible" placeholder="Arquivo simples">
                                <input type="file" class="inputFileHidden">
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group form-file-upload form-file-multiple">
                                <input type="file" multiple="" class="inputFileHidden">
                                <div class="input-group">
                                    <input type="text" class="form-control inputFileVisible" placeholder="Único arquivo">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-fab btn-round btn-primary">
                                            <i class="material-icons">attach_file</i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="form-group form-file-upload form-file-multiple">
                                <input type="file" multiple="" class="inputFileHidden">
                                <div class="input-group">
                                    <input type="text" class="form-control inputFileVisible" placeholder="Múltiplos arquivos" multiple>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-fab btn-round btn-info">
                                            <i class="material-icons">layers</i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-group">
                            <label class="bmd-label-floating"> Textarea</label>
                            <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-default">Default</button>
                    <button class="btn btn-primary btn-round">Round</button>
                    <button class="btn btn-primary btn-round">
                        <i class="fa fa-save"></i> Com Icone
                    </button>
                    <button class="btn btn-primary btn-fab btn-fab-mini btn-round">
                        <i class="fa fa-remove"></i>
                    </button>
                    <button class="btn btn-primary btn-link">Simple</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>