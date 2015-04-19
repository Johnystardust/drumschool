<div id="contact" class="container-fluid white">
    <div class="row no-margin">
        <div class="col-md-6 maps">
            <div id="map-canvas"></div>
        </div>

        <div class="col-md-6 contact-form">
            <form method="post" name="contactform" action="emailForm.php">
                <div class="tag-line">
                    <span>Contact</span>
                </div>
                <div class="frm-row">
                    <div class="col-md-6">
                        <input id="name" class="form-control" type="text" name="name" placeholder="Naam"/>
                    </div>
                    <div class="col-md-6">
                        <input id="email" class="form-control" type="email" name="email" placeholder="E-mail"/>
                    </div>
                </div>

                <div class="tag-line">
                    <span>Reden</span>
                </div>
                <div class="frm-row">
                    <div class="col-md-12">
                        <div>
                            <input type="radio" name="reason" value="proefles" id="proefles">
                            <label for="proefles">Aanvragen proefles</label>
                        </div>

                        <div>
                            <input type="radio" name="reason" value="drumles" id="drumles">
                            <label for="drumles">Aanmelden drumles</label>
                        </div>

                        <div>
                            <input type="radio" name="reason" value="overig" id="overig">
                            <label for="overig">Overige vragen/opmerkingen</label>
                        </div>
                    </div>
                </div>

                <div class="tag-line">
                    <span>Locatie</span>
                </div>
                <div class="frm-row">
                    <div class="col-md-12">
                        <div>
                            <input type="radio" name="location" value="zeewolde" id="zeewolde">
                            <label for="zeewolde">Zeewolde</label>
                        </div>

                        <div>
                            <input type="radio" name="location" value="huizen" id="huizen">
                            <label for="huizen">Huizen</label>
                        </div>
                    </div>
                </div>

                <div class="tag-line">
                    <span>Bericht</span>
                </div>
                <div class="frm-row">
                    <div class="col-md-12">
                        <textarea id="message" class="form-control" name="message" placeholder="Uw bericht" rows="5"></textarea>
                    </div>
                </div>

                <div class="frm-footer">
                    <div class="col-md-12">
                        <input class="btn btn-primary form-control" type="submit" value="Versturen" name="submit"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>