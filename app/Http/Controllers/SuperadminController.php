<?php

namespace App\Http\Controllers;

class SuperadminController extends Controller {

    //Controller
    public function controller() {
        $breadcrumbs = [
            ['link' => "app/controller", 'name' => "Controller"], ['name' => "index"]];
        return view('modules.controller.controller', ['breadcrumbs' => $breadcrumbs]);
    }

    // Super admin business
    public function super_business() {
        $breadcrumbs = [
            ['link' => "superadmin/business", 'name' => "Superadmin Business "], ['name' => "index"]];
        return view('modules.controller.superBusiness', ['breadcrumbs' => $breadcrumbs]);
    }
    public function super_business_edit() {
        $breadcrumbs = [
            ['link' => "superadmin/business/edit", 'name' => "Superadmin Business "], ['name' => "index"]];
        return view('modules.controller.superBusinessEdit', ['breadcrumbs' => $breadcrumbs]);
    }

    // Subscription Package

    public function subscriptions() {
        $breadcrumbs = [
            ['link' => "superadmin/subscription", 'name' => " Subscription Package "], ['name' => "index"]];
        return view('modules.controller.subscriptionPackage', ['breadcrumbs' => $breadcrumbs]);
    }

    // Packages
    public function packages() {
        $breadcrumbs = [
            ['link' => "superadmin/packages", 'name' => " Packages "], ['name' => "index"]];
        return view('modules.controller.packages', ['breadcrumbs' => $breadcrumbs]);
    }

    // Settings
    public function settings() {
        $breadcrumbs = [
            ['link' => "superadmin/settings", 'name' => " Settings "], ['name' => "index"]];
        return view('modules.controller.settings', ['breadcrumbs' => $breadcrumbs]);
    }

    // communicator
    public function communicator() {
        $breadcrumbs = [
            ['link' => "superadmin/communicator", 'name' => " communicator "], ['name' => "index"]];
        return view('modules.controller.communicator', ['breadcrumbs' => $breadcrumbs]);
    }
}