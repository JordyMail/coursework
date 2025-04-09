import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner userInput = new Scanner(System.in);
        double totalPrice = 0.0;

        String[][] foodsAndPrices = {
            {"Siomay", "10000"},
            {"Baso", "15000"},
            {"Soto", "12000"},
            {"Nasi Goreng", "20000"}
        };

        String[][] drinksAndPrices = {
            {"Water", "30000"},
            {"Coca-cola", "25000"},
            {"Orange Juice", "20000"},
            {"Coconut Juice", "15000"}
        };

        System.out.println("🍽️ Welcome to our restaurant!");
        System.out.println("What would you like to order?");
        System.out.println("1. Drinks\n2. Food\n3. Both");
        int orderChoice = userInput.nextInt();

        // Handle drink orders
        if (orderChoice == 1 || orderChoice == 3) {
            System.out.println("Available Drinks:");
            for (int i = 0; i < drinksAndPrices.length; i++) {
                System.out.println((i + 1) + ". " + drinksAndPrices[i][0] + " - Rp" + drinksAndPrices[i][1]);
            }

            while (true) {
                System.out.print("Enter drink number to order (0 to stop): ");
                int drinkChoice = userInput.nextInt();
                if (drinkChoice == 0) break;
                if (drinkChoice >= 1 && drinkChoice <= drinksAndPrices.length) {
                    totalPrice += Double.parseDouble(drinksAndPrices[drinkChoice - 1][1]);
                } else {
                    System.out.println("Invalid choice. Try again.");
                }
            }
        }

        // Handle food orders
        if (orderChoice == 2 || orderChoice == 3) {
            System.out.println("Available Foods:");
            for (int i = 0; i < foodsAndPrices.length; i++) {
                System.out.println((i + 1) + ". " + foodsAndPrices[i][0] + " - Rp" + foodsAndPrices[i][1]);
            }

            while (true) {
                System.out.print("Enter food number to order (0 to stop): ");
                int foodChoice = userInput.nextInt();
                if (foodChoice == 0) break;
                if (foodChoice >= 1 && foodChoice <= foodsAndPrices.length) {
                    totalPrice += Double.parseDouble(foodsAndPrices[foodChoice - 1][1]);
                } else {
                    System.out.println("Invalid choice. Try again.");
                }
            }
        }

        System.out.println("🧾 Your subtotal is: Rp" + totalPrice);

        // Ask for discount coupon
        System.out.print("Do you have a 25% discount coupon? (1 = Yes, 2 = No): ");
        int coupon = userInput.nextInt();
        while (coupon != 1 && coupon != 2) {
            System.out.print("Invalid input. Enter 1 for Yes or 2 for No: ");
            coupon = userInput.nextInt();
        }

        if (coupon == 1) {
            double discount = totalPrice * 0.25;
            totalPrice -= discount;
            System.out.println("🎉 Discount applied! New total: Rp" + totalPrice);
        } else {
            System.out.println("No discount applied.");
        }

        // Payment process
        System.out.print("💵 Enter your payment amount: ");
        int money = userInput.nextInt();
        while (money < totalPrice) {
            System.out.println("❗ Insufficient funds. Enter additional amount:");
            int add = userInput.nextInt();
            money += add;
        }

        int change = money - (int) totalPrice;
        System.out.println("💰 Change: Rp" + change);

        // Denomination breakdown
        int[] denominations = {50000, 20000, 10000, 5000, 2000, 1000};
        for (int i = 0; i < denominations.length; i++) {
            int count = change / denominations[i];
            if (count > 0) {
                System.out.println(count + "x Rp" + denominations[i]);
                change %= denominations[i];
            }
        }

        System.out.println("✅ Thank you for ordering! Have a great day.");
    }
}
