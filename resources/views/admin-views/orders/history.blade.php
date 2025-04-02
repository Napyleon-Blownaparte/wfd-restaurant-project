<x-app-layout>
    <!-- Sidebar -->
    <div class="sm:flex sm:flex-col bg-gradient-to-b from-black to-gray-800 text-white sm:w-full">
        <div class="pt-16 pb-6 px-6 border-b border-gray-700 flex items-center justify-between">
            <h2 class="text-xl font-bold">History Order</h2>
        </div>
    </div>
    <div class="flex-1 p-8 bg-gray-100">
        <!-- Filters -->
        <div class="mb-6 flex flex-wrap items-center gap-4">
            <div class="flex gap-4 w-full sm:w-auto">
                <button type="submit" name="period" value="today"
                    class="py-2 px-4 bg-gray-800 text-white rounded hover:bg-gray-700 w-full sm:w-auto">
                    Today
                </button>
                <button type="submit" name="period" value="this_week"
                    class="py-2 px-4 bg-gray-800 text-white rounded hover:bg-gray-700 w-full sm:w-auto ">
                    This Week
                </button>
                <button type="submit" name="period" value="this_week"
                    class="py-2 px-4 bg-gray-800 text-white rounded hover:bg-gray-700 w-full sm:w-auto ">
                    This Month
                </button>
                <button type="submit" name="period" value="this_week"
                    class="py-2 px-4 bg-gray-800 text-white rounded hover:bg-gray-700 w-full sm:w-auto ">
                    This Year
                </button>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 w-full">
            <input type="date" name="start_date" value=""
                class="py-2 px-4 border rounded w-full">
            <input type="date" name="end_date" value=""
                class="py-2 px-4 border rounded w-full">
            <button type="submit" name="period" value="custom"
                class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 w-full sm:w-auto">
                Filter
            </button>
        </div>
    </div>

    {{-- Table Content --}}
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h2 class="text-2xl font-bold mb-4">Order Recap</h2>
        <table id="example" class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">Order Date Time</th>
                    <th class="px-4 py-2">Order Status</th>
                    <th class="px-4 py-2">Table Number</th>
                    <th class="px-4 py-2">Total Price</th>
                    <th class="px-4 py-2">Payment Status</th>
                    <th class="px-4 py-2">Voucher Used</th>
                    <th class="px-4 py-2">Payment Date Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">Tiger Nixon</td>
                    <td class="border px-4 py-2">System Architect</td>
                    <td class="border px-4 py-2">Edinburgh</td>
                    <td class="border px-4 py-2">61</td>
                    <td class="border px-4 py-2">2011/04/25</td>
                    <td class="border px-4 py-2">$320,800</td>
                    <td class="border px-4 py-2">2011/04/25</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Garrett Winters</td>
                    <td class="border px-4 py-2">Accountant</td>
                    <td class="border px-4 py-2">Tokyo</td>
                    <td class="border px-4 py-2">63</td>
                    <td class="border px-4 py-2">2011/07/25</td>
                    <td class="border px-4 py-2">$170,750</td>
                    <td class="border px-4 py-2">2011/07/25</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Ashton Cox</td>
                    <td class="border px-4 py-2">Junior Technical Author</td>
                    <td class="border px-4 py-2">San Francisco</td>
                    <td class="border px-4 py-2">66</td>
                    <td class="border px-4 py-2">2009/01/12</td>
                    <td class="border px-4 py-2">$86,000</td>
                    <td class="border px-4 py-2">2009/01/12</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Cedric Kelly</td>
                    <td class="border px-4 py-2">Senior Javascript Developer</td>
                    <td class="border px-4 py-2">Edinburgh</td>
                    <td class="border px-4 py-2">22</td>
                    <td class="border px-4 py-2">2012/03/29</td>
                    <td class="border px-4 py-2">$433,060</td>
                    <td class="border px-4 py-2">2012/03/29</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Airi Satou</td>
                    <td class="border px-4 py-2">Accountant</td>
                    <td class="border px-4 py-2">Tokyo</td>
                    <td class="border px-4 py-2">33</td>
                    <td class="border px-4 py-2">2008/11/28</td>
                    <td class="border px-4 py-2">$162,700</td>
                    <td class="border px-4 py-2">2008/11/28</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Brielle Williamson</td>
                    <td class="border px-4 py-2">Integration Specialist</td>
                    <td class="border px-4 py-2">New York</td>
                    <td class="border px-4 py-2">61</td>
                    <td class="border px-4 py-2">2012/12/02</td>
                    <td class="border px-4 py-2">$372,000</td>
                    <td class="border px-4 py-2">2012/12/02</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Herrod Chandler</td>
                    <td class="border px-4 py-2">Sales Assistant</td>
                    <td class="border px-4 py-2">San Francisco</td>
                    <td class="border px-4 py-2">59</td>
                    <td class="border px-4 py-2">2012/08/06</td>
                    <td class="border px-4 py-2">$137,500</td>
                    <td class="border px-4 py-2">2012/08/06</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Herrod Chandler</td>
                    <td class="border px-4 py-2">Sales Assistant</td>
                    <td class="border px-4 py-2">San Francisco</td>
                    <td class="border px-4 py-2">59</td>
                    <td class="border px-4 py-2">2012/08/06</td>
                    <td class="border px-4 py-2">$137,500</td>
                    <td class="border px-4 py-2">2012/08/06</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Ashton Cox</td>
                    <td class="border px-4 py-2">Junior Technical Author</td>
                    <td class="border px-4 py-2">San Francisco</td>
                    <td class="border px-4 py-2">66</td>
                    <td class="border px-4 py-2">2009/01/12</td>
                    <td class="border px-4 py-2">$86,000</td>
                    <td class="border px-4 py-2">2009/01/12</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Cedric Kelly</td>
                    <td class="border px-4 py-2">Senior Javascript Developer</td>
                    <td class="border px-4 py-2">Edinburgh</td>
                    <td class="border px-4 py-2">22</td>
                    <td class="border px-4 py-2">2012/03/29</td>
                    <td class="border px-4 py-2">$433,060</td>
                    <td class="border px-4 py-2">2012/03/29</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Airi Satou</td>
                    <td class="border px-4 py-2">Accountant</td>
                    <td class="border px-4 py-2">Tokyo</td>
                    <td class="border px-4 py-2">33</td>
                    <td class="border px-4 py-2">2008/11/28</td>
                    <td class="border px-4 py-2">$162,700</td>
                    <td class="border px-4 py-2">2008/11/28</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Brielle Williamson</td>
                    <td class="border px-4 py-2">Integration Specialist</td>
                    <td class="border px-4 py-2">New York</td>
                    <td class="border px-4 py-2">61</td>
                    <td class="border px-4 py-2">2012/12/02</td>
                    <td class="border px-4 py-2">$372,000</td>
                    <td class="border px-4 py-2">2012/12/02</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<!-- jQuery -->
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            // Add any customization options here
        });
    });
</script>