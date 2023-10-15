import { Component } from '@angular/core';

@Component({
  selector: 'app-landing-page',
  templateUrl: './landing-page.component.html',
  styleUrls: ['./landing-page.component.css']
})
export class LandingPageComponent {

  // stores the state of the menu
  menuIsOpen: boolean = false;

  // stores the state of the dropdowns
  dropdowns: any = {
    exploreIsOpen: false,
    contactIsOpen: false
  }

  // opens the nav menu
  openMenu(): void {
    // selects the elements of the hamburger menu
    const menu: HTMLElement = document.getElementById('menu') as HTMLElement;
    const top: HTMLElement = document.getElementById('top-bar') as HTMLElement;
    const middle: HTMLElement = document.getElementById('middle-bar') as HTMLElement;
    const bottom: HTMLElement = document.getElementById('bottom-bar') as HTMLElement;
    const sidebar: HTMLElement = document.getElementById('sidebar') as HTMLElement;

    // turns the hamburguer into a X when open, and back to normal when closed
    if (!this.menuIsOpen) {
      menu.classList.add('menu-open');
      top.classList.add('menu-open-top');
      middle.classList.add('menu-open-middle');
      bottom.classList.add('menu-open-bottom');
      sidebar.classList.add('menu-open-sidebar');
    } else {
      menu.classList.remove('menu-open');
      top.classList.remove('menu-open-top');
      middle.classList.remove('menu-open-middle');
      bottom.classList.remove('menu-open-bottom');
      sidebar.classList.remove('menu-open-sidebar');
    }

    this.menuIsOpen = !this.menuIsOpen;
  }

  // opens the footer dropdowns
  openDropdown(dropdown: string): void {
    const explore: HTMLElement = document.getElementById('explore') as HTMLElement;

    if (dropdown == 'explore' && !this.dropdowns.exploreIsOpen) {
      explore.classList.remove('hidden');
      explore.classList.add('flex');
      this.dropdowns.exploreIsOpen = !this.dropdowns.exploreIsOpen;
    } else if (dropdown == 'explore' && this.dropdowns.exploreIsOpen) {
      explore.classList.remove('flex');
      explore.classList.add('hidden')
      this.dropdowns.exploreIsOpen = !this.dropdowns.exploreIsOpen;
    }
  }
}
