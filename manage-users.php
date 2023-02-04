<?php 
include "header.php"; 
$userData = getAppUsers();
?>
          
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="p-4 bg-white light:bg-gray-900">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative mt-1">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 light:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" placeholder="Search for users by name">
        </div>
    </div>
    <table class="w-full text-sm text-left text-gray-500 light:text-gray-400">
        <thead class="text-gray-700 bg-gray-50 light:bg-gray-700 light:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Fullname
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone | Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Wallet
                </th>
                <th scope="col" class="px-6 py-3">
                    Bank Details
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($userData as $value){ ?>
                <tr class="bg-white border-b light:bg-gray-800 light:border-gray-700 hover:bg-gray-50 light:hover:bg-gray-600">
                    <th class="w-4 p-4">
                        <?php echo $value['id'];?>
                    </th>
                    <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap light:text-white">
                        <?php echo $value['fullname'];?>
                    </th>
                    <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap light:text-white">
                        +91 <?php echo $value['phone'].'<br>'.$value['email'];?>
                    </td>
                    <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap light:text-white">
                        ₹ <?php echo $value['wallet'];?>
                    </td>
                    <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap light:text-white">
                        <?php 
                            if($value['bankDetails'] != null){
                                $bankDetails = "Bank Name: ".$value['bankDetails']['bankName']."<br>A/c No.: ".$value['bankDetails']['accNo']."<br>IFSC Code: ".$value['bankDetails']['ifscCode']."<br>Holder: ".$value['bankDetails']['acHolderName'];
                            } else{
                                $bankDetails = '-';
                            }
                            echo $bankDetails;
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include "footer.php";?>