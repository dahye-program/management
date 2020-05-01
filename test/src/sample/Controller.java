package sample;

import javafx.fxml.FXML;
import javafx.fxml.Initializable;

import java.net.URL;
import java.util.ResourceBundle;

public class Controller implements Initializable {
    @FXML
    Button popupBtn;
    Popup popup;
    TextArea textArea;
    @Override
    public void initialize(URL location, ResourceBundle resources) {
        popup = new Popup();
        textArea = new TextArea("이창은 팝업 창 입니다.");
    }
    public void handlePopup(ActionEvent event){
        if(popup.isShowing()){
            popup.hide();
        }
        else {
            final Window window = popupBtn.getScene().getWindow();
            popup.setWidth(100);
            popup.setHeight(300);
            final double x = window.getX() + popupBtn.localToScene(0, 0).getX() + popupBtn.getScene().getX() ;
            final double y = window.getY() + popupBtn.localToScene(0, 0).getY() + popupBtn.getScene().getY() + popupBtn.getHeight();
            popup.getContent().clear(); popup.getContent().addAll(textArea); popup.show(window, x, y);
        }
    }
}

