<?php if(!class_exists('Rain\Tpl')){exit;}?>
    <div class="newRecipientPageContent">
        <div class="formRecipientBox">
            <h3 class="newRecipientBlueTitle">Novo Endereço</h3>
            <form action="/recipients/new" method="post" id="formRecipients">
                <div class="recipientField">
                    <label for="name"><h6 class="recipientLabel">Nome:</h6></label>
                    <input type="text" name="nameRecipient" class="recipientInput" placeholder="Ex: Fulano De Tal" required>
                </div>
                <div class="recipientField">
                    <label for="email"><h6 class="recipientLabel">Email:</h6></label>
                    <input type="text" name="emailRecipient" class="recipientInput" placeholder="Ex: fulano@email.com" required>
                </div>
                <div class="recipientField">
                    <label for="tag"><h6 class="recipientLabel">Tag:</h6></label>
                    <input type="text" name="tagRecipient" class="recipientInput" placeholder="Cliente" id="lastInput" required>
                </div>
                <button class="addRecipientButton">Adicionar Endereço</button>
            </form>
        </div>
    </div>