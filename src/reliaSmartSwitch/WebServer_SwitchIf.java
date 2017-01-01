package reliaSmartSwitch;

public class WebServer_SwitchIf {

	public static void main(String[] args) throws InterruptedException {
		// TODO Auto-generated method stub
		int Cnt=0;
		System.out.println("Starting ...");
		while (true)
			{
			System.out.println("Loop " + Cnt);
			Cnt++;
			Thread.sleep(3000);
			}
		
	}	
}