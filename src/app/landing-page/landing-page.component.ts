import { Component, HostListener } from '@angular/core';

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
    mediaIsOpen: false
  }

  // opens the nav menu
  openMenu(): void {
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
    const dropdownState: string = dropdown + 'IsOpen';

    const changeDropdownStyle = (dropdown: string, add: boolean): void => {
      const dropdownElement: HTMLElement = document.getElementById(dropdown) as HTMLElement;

      if (add) {
        dropdownElement.classList.add('flex');
        dropdownElement.classList.remove('hidden');
      } else {
        dropdownElement.classList.add('hidden');
        dropdownElement.classList.remove('flex');
      }

      this.dropdowns[dropdownState] = !this.dropdowns[dropdownState];
    }

    if (this.dropdowns[dropdownState]) {
      changeDropdownStyle(dropdown, false);
    } else {
      changeDropdownStyle(dropdown, true);
    }
  }

  // scrolls to the y coordinate passed
  scrollTo(section: string): void {
    if (section === 'top') {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    } else {
      const element: HTMLElement = document.getElementById(section) as HTMLElement;
      const elementPos: DOMRect = element.getBoundingClientRect();

      window.scrollTo({ top: elementPos.top - 150, behavior: 'smooth' })
    }
  }

  // shows the back to top button
  @HostListener('window:scroll', ['$event'])
  showBackToTopButton(event: any): void {
    const button: HTMLElement = document.getElementById('back-to-top-button') as HTMLElement;

    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
      button.classList.remove("scale-0");
      button.classList.add("scale-100");
    } else {
      button.classList.remove("scale-100");
      button.classList.add("scale-0");
    }
  }
}
