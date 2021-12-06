import java.awt.event.*;
import java.awt.*;
import java.applet.*;

/*
<APPLET code="ButtonDemo" width=350 height=150>
</APPLET>
*/

public class ButtonDemo extends Applet implements ActionListener
{
	public ButtonDemo()
	{
		Button b1= new Button("RED");
        Button b2= new Button("GREEN");
        Button b3= new Button("BLUE");
        Button b4= new Button("YELLOW");        
        add(b1);
        add(b2);
        add(b3);
        add(b4);
        b1.addActionListener(this);
        b2.addActionListener(this);
        b3.addActionListener(this);
        b4.addActionListener(this);
    }
    public void ActionPerformed(ActionEvent ae)
    {
            if(ae.gettext() == "RED")
            {
                setBackground(Color.red);
            }
            else if(ae.gettext() == "GREEN")
            {
                setBackground(Color.green);
            }
            else if(ae.gettext() == "BLUE")
            {
                setBackground(Color.blue);
            }
            else
            {
                setBackground(Color.yellow);
            }
    }
}

public static void main(String args[])
{
    ButtonDemo a=new ButtonDemo();
}