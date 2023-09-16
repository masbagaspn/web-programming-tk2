<dialog id="dialog-student-delete" class="bg-black/10 backdrop-blur-sm">
    <form id="form-student-delete" method="POST" class="p-8 bg-white rounded-lg drop-shadow-lg flex flex-col items-center">
        {{ csrf_field() }}
        @method('DELETE')
        <div class="p-2 w-fit bg-red-100 rounded-full text-red-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-alert-triangle"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
        </div>
        <h3 class="text-lg font-semibold my-3">Are you sure?</h3>
        <p class="text-sm text-center opacity-70">This action can not be undone.<br/>All values associated with this data will be lost.</p>
        <div class="flex gap-2 mt-6 text-sm">
            <button id="btn-delete-cancel" type="button" class="button border hover:border-black cursor-pointer">Cancel</button>
            <button id="btn-delete-confirm" type="submit" class="button bg-red-500 text-white cursor-pointer hover:bg-red-700">Delete</button>
        </div>
    </form>
</dialog>